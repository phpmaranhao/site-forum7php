/**
 * Created by Fabio Soares on 27/08/2016.
 */

function lock(element){
    element.style.position = "fixed";
    element.style.top = '40px';
}
function ajustBrother(element){
    element.style.paddingTop = "62px";
}
function resetBrother(element){
    element.style.paddingTop = "0";
}
function resetAllBrothers(elements){
    for(let i = 0; i < elements.length; i++){
        resetBrother(elements[i]);
    }
}

function unlock(element){
    element.style.position = "relative";
    element.style.top = '0';
}

function unlockAll(elements){
    for(let i = 0; i < elements.length; i++){
        unlock(elements[i]);
    }
}

function addClass(element, stringClass){
    let classes = element.className;

    classes = classes.split(' ');
    classes.push(stringClass);

    classes = classes.join(' ');
    element.className = classes;
}
function removeClass(element, stringClass){
    let classes = element.className;
    classes = classes.split(' ');

    for(let i = 0; i < classes.length; i++){
        if(classes[i] == stringClass){
            classes[i] = '';
            classes = classes.join('');
            element.className = classes;
        }
    }

}

function ajustTopbar(elements){
    if(window.pageYOffset > 30){
        for(let i = 0; i < elements.length; i++){
            elements[i].className = 'column navItem smaller';
        }
    }else{
        for(let i = 0; i < elements.length; i++) {
            elements[i].className = 'column navItem';
        }
    }
}
window.addEventListener('load', function(){
    var navBar = document.getElementById('navBar');
    var elements = document.getElementsByClassName('navItem');
    var topicElements = document.getElementsByClassName('sectionHeader');
    var topicBrothers = document.getElementsByClassName('content');

    ajustTopbar(elements);
    window.addEventListener('scroll', function(){
        ajustTopbar(elements);

        // unlockAll(topicElements);
        // resetAllBrothers(topicBrothers);
        removeClass(navBar, "what");
        removeClass(navBar, "who");
        removeClass(navBar, "when");
        removeClass(navBar, "where");
        removeClass(navBar, "howMuch");

        if(window.pageYOffset+40 >= topicElements[0].offsetTop && window.pageYOffset+40 < topicElements[1].offsetTop){
            // lock(topicElements[0]);
            // ajustBrother(topicBrothers[0]);
            addClass(navBar, "what");
            console.log("SCROLL: O QUÊ");
        }
        if(window.pageYOffset+40 >= topicElements[1].offsetTop && window.pageYOffset+40 < topicElements[2].offsetTop){
            // lock(topicElements[1]);
            // ajustBrother(topicBrothers[1]);
            addClass(navBar, "who");
            console.log("SCROLL: QUEM");
        }
        if(window.pageYOffset+40 >= topicElements[2].offsetTop && window.pageYOffset+40 < topicElements[3].offsetTop){
            // lock(topicElements[2]);
            // ajustBrother(topicBrothers[2]);
            addClass(navBar, "when");
            console.log("SCROLL: QUANDO");
        }
        if(window.pageYOffset+40 >= topicElements[3].offsetTop && window.pageYOffset+40 < topicElements[4].offsetTop){
            // lock(topicElements[3]);
            // ajustBrother(topicBrothers[3]);
            addClass(navBar, "where");
            console.log("SCROLL: ONDE");
        }
        if(window.pageYOffset+40 >= topicElements[4].offsetTop){
            // lock(topicElements[4]);
            // ajustBrother(topicBrothers[4]);
            addClass(navBar, "where");
            console.log("SCROLL: QUANTO");
        }

    });

    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });

});