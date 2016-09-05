/**
 * Created by Fabio Soares on 27/08/2016.
 */

function lock(element){
    element.style.position = "fixed";
    element.style.top = '40px';
    var a = document.getElementById("whatContent");
    a.style.marginTop = '72px';
}
function unlock(element){
    element.style.position = "relative";
    element.style.top = '0';
    var a = document.getElementById("whatContent");
    a.style.marginTop = '0';
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
    var elements = document.getElementsByClassName('navItem');
    var topicElements = document.getElementsByClassName('sectionHeader');

    ajustTopbar(elements);
    window.addEventListener('scroll', function(){
        ajustTopbar(elements);

        unlock(topicElements[0]);

        if(window.pageYOffset+40 >= topicElements[0].offsetTop && window.pageYOffset+40 < topicElements[1].offsetTop){
            lock(topicElements[0]);
            console.log("SCROLL: O QUÊ");
        }else if(window.pageYOffset+40 >= topicElements[1].offsetTop && window.pageYOffset+40 < topicElements[2].offsetTop){
            unlock(topicElements[0]);
            console.log("SCROLL: QUEM");
        }else if(window.pageYOffset+40 >= topicElements[2].offsetTop && window.pageYOffset+40 < topicElements[3].offsetTop){

            console.log("SCROLL: QUANDO");
        }else if(window.pageYOffset+40 >= topicElements[3].offsetTop && window.pageYOffset+40 < topicElements[4].offsetTop){

            console.log("SCROLL: ONDE");
        }else if(window.pageYOffset+40 >= topicElements[4].offsetTop){

            console.log("SCROLL: QUANTO");
        }else{
            unlock(topicElements[0]);
        }

    });

    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });

});