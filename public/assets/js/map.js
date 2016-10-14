function initialize_map(){
    var LatLng = new google.maps.LatLng(-2.549348, -44.240500);
    var mapOptions = {
        zoom: 17,
        center: LatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel:false
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var image = 'http://homologacao.stc.ma.gov.br/mais_idh/marker.png';
    var marcadorPersonalizado = new google.maps.Marker({
        position: LatLng,
        map: map,
        icon: image,
        title: 'Faculdade CEST',
        animation: google.maps.Animation.DROP
    });

}

// Função para carregamento assíncrono
function loadScriptMap() {
    var script = document.createElement("script");

    script.type ="text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCjxDMkkiAeG2VU5_sL_Ofxjvd_NWVm2Co&callback=initialize_map";

    document.body.appendChild(script);
}
window.onload = loadScriptMap;
