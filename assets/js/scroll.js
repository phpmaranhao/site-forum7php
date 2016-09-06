/**
 * Created by Fabio Soares on 27/08/2016.
 */

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

    ajustTopbar(elements);
    window.addEventListener('scroll', function(){
        ajustTopbar(elements);
        removeClass(navBar, "what");
        removeClass(navBar, "who");
        removeClass(navBar, "when");
        removeClass(navBar, "where");
        removeClass(navBar, "howMuch");
        if(window.pageYOffset+40 >= topicElements[0].offsetTop && window.pageYOffset+40 < topicElements[1].offsetTop){
            addClass(navBar, "what");
        }
        if(window.pageYOffset+40 >= topicElements[1].offsetTop && window.pageYOffset+40 < topicElements[2].offsetTop){
            addClass(navBar, "who");
        }
        if(window.pageYOffset+40 >= topicElements[2].offsetTop && window.pageYOffset+40 < topicElements[3].offsetTop){
            addClass(navBar, "when");
        }
        if(window.pageYOffset+40 >= topicElements[3].offsetTop && window.pageYOffset+40 < topicElements[4].offsetTop){
            addClass(navBar, "where");
        }
        if(window.pageYOffset+40 >= topicElements[4].offsetTop){
            addClass(navBar, "where");
        }
    });
    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });

});