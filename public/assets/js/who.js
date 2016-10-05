window.addEventListener('load', function(){
    var navBar = document.getElementById('navBar');
    var elements = document.getElementsByClassName('navItem');
    var sidenav = document.getElementById('mySidenav');

    // Side nav
    document.getElementById("openSideNav").addEventListener('click', function(){
        sidenav.style.width = "250px";
    });

    document.getElementById('closeSideNav').addEventListener('click', function () {
        sidenav.style.width = "0";
    });
    // chage top color
    addClass(navBar, "who");

    window.addEventListener('scroll', function () {
        if (window.innerWidth > 500) {
            ajustTopbar(document.getElementsByClassName('navItem'));
        }
    });
});
