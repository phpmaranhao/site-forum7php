/**
 * Created by Fabio Soares on 27/08/2016.
 */

window.addEventListener('load', function(){
    var navBar = document.getElementById('navBar');
    var elements = document.getElementsByClassName('navItem');
    var sidenav = document.getElementById('mySidenav');
    var topicElements = document.getElementsByClassName('sectionHeader');

    // Side nav
    document.getElementById("openSideNav").addEventListener('click', function(){
        sidenav.style.width = "250px";
    });

    document.getElementById('closeSideNav').addEventListener('click', function () {
        sidenav.style.width = "0";
    });

    window.addEventListener('scroll', function () {
        if (window.innerWidth > 500) {
            ajustTopbar(document.getElementsByClassName('navItem'));
        }
        removeClass(navBar, "what");
        removeClass(navBar, "who");
        removeClass(navBar, "when");
        removeClass(navBar, "where");
        removeClass(navBar, "howMuch");
        removeClass(navBar, "sponsorship");
        removeClass(navBar, "partiner");


        removeClass(sidenav, "what");
        removeClass(sidenav, "who");
        removeClass(sidenav, "when");
        removeClass(sidenav, "where");
        removeClass(sidenav, "howMuch");
        removeClass(sidenav, "sponsorship");
        removeClass(sidenav, "partiner");

        removeClass(elements[0], 'onWhat');
        removeClass(elements[1], 'onWho');
        removeClass(elements[2], 'onWhen');
        removeClass(elements[3], 'onWhere');
        removeClass(elements[4], 'onHowMuch');
        removeClass(elements[5], 'onSponsorship');
        removeClass(elements[6], 'onPartiner');
        if (window.pageYOffset + 40 >= topicElements[0].offsetTop && window.pageYOffset + 40 < topicElements[1].offsetTop) {
            addClass(elements[0], 'onWhat');
            addClass(navBar, "what");
            addClass(sidenav, "what");
        }
        if (window.pageYOffset + 40 >= topicElements[1].offsetTop && window.pageYOffset + 40 < topicElements[2].offsetTop) {
            addClass(elements[1], 'onWho');
            addClass(navBar, "who");
            addClass(sidenav, "who");
        }
        if (window.pageYOffset + 40 >= topicElements[2].offsetTop && window.pageYOffset + 40 < topicElements[3].offsetTop) {
            addClass(elements[2], 'onWhen');
            addClass(navBar, "when");
            addClass(sidenav, "when");
        }
        if (window.pageYOffset + 40 >= topicElements[3].offsetTop && window.pageYOffset + 40 < topicElements[4].offsetTop) {
            addClass(elements[3], 'onWhere');
            addClass(navBar, "where");
            addClass(sidenav, "where");
        }
        if (window.pageYOffset + 40 >= topicElements[4].offsetTop && window.pageYOffset + 40 < topicElements[5].offsetTop) {
            addClass(elements[4], 'onHowMuch');
            addClass(navBar, "howMuch");
            addClass(sidenav, "howMuch");
        }
        if (window.pageYOffset + 40 >= topicElements[5].offsetTop && window.pageYOffset + 40 < topicElements[6].offsetTop) {
            addClass(elements[5], 'onSponsorship');
            addClass(navBar, "sponsorship");
            addClass(sidenav, "sponsorship");
        }
        if (window.pageYOffset + 40 >= topicElements[6].offsetTop) {
            addClass(elements[6], 'onPartiner');
            addClass(navBar, "partiner");
            addClass(sidenav, "partiner");
        }

    });

    window.addEventListener('resize', function(){
        topicElements = document.getElementsByClassName('sectionHeader');
    });
});