/**
 * Created by Администратор on 07.03.2016.
 */
function initialize() {
    var myOptions = {
        zoom: 15, // масштаб карты
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP // тип карты
    };
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    var geocoder = new google.maps.Geocoder(); // геокодер
    geocoder.geocode( { 'address': 'г. Тула проспект Ленина, 99'}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({ // маркер
                position: results[0].geometry.location,
                map: map
            });
            var contentString = '<div>г. Тула проспект Ленина, 99</div>';
            var infowindow = new google.maps.InfoWindow({ // информационное окно
                content: contentString
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }
    });
}
$('document').ready(function() {
    if (typeof google !== 'undefined') initialize();
});


var set_slide = function(selector, slide) {
    $(selector).text(slide);
}

var time = new Date();
var target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
target_time = target_time.valueOf()+1000*60*60*24;

var tick = function(init) {
    if (init == undefined) {
        init = false;
    }
    var current_time = new Date();
    current_time = current_time.valueOf();
    if (current_time > target_time) {
        var time = new Date();
        target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
        target_time = target_time.valueOf()+1000*60*60*24;
    }
    var time_diff = Math.floor((target_time - current_time)/1000);
    var second_2 = time_diff % 10; time_diff = Math.floor(time_diff/10);
    var second_1 = time_diff % 6; time_diff = Math.floor(time_diff/6);
    var minute_2 = time_diff % 10; time_diff = Math.floor(time_diff/10);
    var minute_1 = time_diff % 6; time_diff = Math.floor(time_diff/6);
    var hour_2 = Math.floor(time_diff/10);
    var hour_1 = time_diff % 10;
    set_slide('span.secondPlay', second_2);
    if ((second_2 == 9) || init) {set_slide('span.second6Play', second_1);
        if ((second_1 == 5) || init) {set_slide('span.minutePlay', minute_2);
            if ((minute_2 == 9) || init) {set_slide('span.minute6Play', minute_1);
                if ((minute_1 == 5) || init) {set_slide('span.hourPlay', hour_1);
                    if ((hour_2 == 9) || init) {set_slide('span.hour2Play', hour_2);}}}}}
}
tick(true);
setInterval(tick, 1000);