function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}
function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}
function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID)-35;
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
}

var updateScroll = function(target){
    console.log(target);
    if(target == ''){
        target = window.location.href.substr(window.location.href.search("#"));
    }
    switch (target){
        case "#oque":
            smoothScroll('what');
            break;
        case "#quem":
            smoothScroll('sectionWho');
            break;
        case "#onde":
            smoothScroll('sectionWhere');
            break;
        case "#quando":
            smoothScroll('sectionWhen');
            break;
        case "#quanto":
            smoothScroll('sectionHowMuch');
            break;
        case "#patrocinadores":
            smoothScroll('sectionSponsorship');
            break;
        case "#parceiros":
            smoothScroll('sectionPartiner');
            break;

    }
};

(function(){
    var navItens = Array.prototype.slice.call(document.getElementsByClassName('navItem'));
    var navItensMobile = Array.prototype.slice.call(document.getElementsByClassName('navItemMobile'));

    window.addEventListener('load', function(){
        updateScroll('');
    });
    navItens.forEach(function(current, i, arr){
        current.addEventListener('click', function(){
            updateScroll(current.href.substr(current.href.search("#")))
        });
    });
    navItensMobile.forEach(function(current, i, arr){
        current.addEventListener('click', function(){
            updateScroll(current.href.substr(current.href.search("#")))
        });
    });
})();
