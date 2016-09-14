/**
 * Created by Fabio Soares on 27/08/2016.
 */

function addClass(element, stringClass){
    let classes = element.className;

    classes = classes.split(' ');
    if(classes.indexOf(stringClass) == -1){
        classes.push(stringClass);
    }
    classes = classes.join(' ');
    element.className = classes;
}
function removeClass(element, stringClass){
    let classes = element.className;
    classes = classes.split(' ');
    if(classes.indexOf(stringClass) > -1){
        classes.splice(classes.indexOf(stringClass), 1);
    }
    classes = classes.join(' ');
    element.className = classes;
}

function ajustTopbar(elements){
    if(window.pageYOffset > 30){
        for(let i = 0; i < elements.length; i++){
            addClass(elements[i], "smaller");
        }
    }else{
        for(let i = 0; i < elements.length; i++) {
            removeClass(elements[i], 'smaller');
        }
    }
}
window.addEventListener('load', function(){
    var navBar = document.getElementById('navBar');
    var elements = document.getElementsByClassName('navItem');
    var topicElements = document.getElementsByClassName('sectionHeader');
    var sidenav = document.getElementById('mySidenav');
    // Side nav
    document.getElementById("openSideNav").addEventListener('click', function(){
        sidenav.style.width = "250px";
    });

    document.getElementById('closeSideNav').addEventListener('click', function () {
           sidenav.style.width = "0";
    });
    if(window.innerWidth > 500){
        ajustTopbar(elements);
    }
    window.addEventListener('scroll', function(){
        if(window.innerWidth > 500) {
            ajustTopbar(elements);
        }
        removeClass(navBar, "what");
        removeClass(navBar, "who");
        removeClass(navBar, "when");
        removeClass(navBar, "where");
        removeClass(navBar, "howMuch");

        removeClass(sidenav, "what");
        removeClass(sidenav, "who");
        removeClass(sidenav, "when");
        removeClass(sidenav, "where");
        removeClass(sidenav, "howMuch");

        removeClass(elements[0], 'onWhat');
        removeClass(elements[1], 'onWho');
        removeClass(elements[2], 'onWhen');
        removeClass(elements[3], 'onWhere');
        removeClass(elements[4], 'onHowMuch');
        if(window.pageYOffset+40 >= topicElements[0].offsetTop && window.pageYOffset+40 < topicElements[1].offsetTop){
            addClass(elements[0], 'onWhat');
            addClass(navBar, "what");
            addClass(sidenav, "what");
        }
        if(window.pageYOffset+40 >= topicElements[1].offsetTop && window.pageYOffset+40 < topicElements[2].offsetTop){
            addClass(elements[1], 'onWho');
            addClass(navBar, "who");
            addClass(sidenav, "who");
        }
        if(window.pageYOffset+40 >= topicElements[2].offsetTop && window.pageYOffset+40 < topicElements[3].offsetTop){
            addClass(elements[2], 'onWhen');
            addClass(navBar, "when");
            addClass(sidenav, "when");
        }
        if(window.pageYOffset+40 >= topicElements[3].offsetTop && window.pageYOffset+40 < topicElements[4].offsetTop){
            addClass(elements[3], 'onWhere');
            addClass(navBar, "where");
            addClass(sidenav, "where");
        }
        if(window.pageYOffset+40 >= topicElements[4].offsetTop){
            addClass(elements[4], 'onHowMuch');
            addClass(navBar, "howMuch");
            addClass(sidenav, "howMuch");
        }

    });
    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });
});