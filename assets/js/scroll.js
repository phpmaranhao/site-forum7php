/**
 * Created by Fabio Soares on 27/08/2016.
 */

window.addEventListener('load', function(){
    var elements = document.getElementsByClassName('navItem');
    var topicElements = document.getElementsByClassName('sectionHeader');


    window.addEventListener('scroll', function(){
        if(window.pageYOffset > 30){
            for(var i = 0; i < elements.length; i++){
                elements[i].className = 'column navItem smaller';
            }
        }else{
            for (var i = 0; i < elements.length; i++) {
                elements[i].className = 'column navItem';
            }
        }

        if(window.pageYOffset+44 >= topicElements[0].offsetTop && window.pageYOffset+44 < topicElements[1].offsetTop){
            var whatElement = document.querySelector('.sectionHeader.what');
            whatElement.style.position = "fixed";
            whatElement.style.top = '42px';
            whatElement.style.width = "100%";
            console.log("SCROLL: O QUÊ");
        }else if(window.pageYOffset+44 >= topicElements[1].offsetTop && window.pageYOffset+44 < topicElements[2].offsetTop){

            console.log("SCROLL: QUEM");
        }else if(window.pageYOffset+44 >= topicElements[2].offsetTop && window.pageYOffset+44 < topicElements[3].offsetTop){

            console.log("SCROLL: QUANDO");
        }else if(window.pageYOffset+44 >= topicElements[3].offsetTop && window.pageYOffset+44 < topicElements[4].offsetTop){

            console.log("SCROLL: ONDE");
        }else if(window.pageYOffset+44 >= topicElements[4].offsetTop){

            console.log("SCROLL: QUANTO");
        }


    });

    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });

});