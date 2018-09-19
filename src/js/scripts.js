/* Notification animation jQuery */
function notify()
{
    $('.notification').slideDown('slow');
    window.setTimeout(close,8000);
};

function cash()
{
    $('.cash').slideDown('fast');
    window.setTimeout(close,5000);
};

function close() {
  $('.notification').slideUp('fast');
  $('.cash').slideUp('fast');
}

/* Swith LightWidget Iframe depending on screen size*/
$(document).ready(function()
{
if($(window).width() < 1500)
  $('#instagramWidget').attr("src","//lightwidget.com/widgets/c3e5b781e23a52c69d949bb511cb1442.html");
else
  $('#instagramWidget').attr("src","//lightwidget.com/widgets/51a04ad7dad8542b9a3322c7eebe2b4f.html");
});


/* Map location, zoom and map styling */
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 55.681507, lng: 12.579166},
    zoom: 15,
    styles: [
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#040404"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fa0150"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#570161"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#191C1D"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fa0150"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#191C1D"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#191C1D"
            },
            {
                "weight": 1.4
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#575f6b"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#575f6b"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#575f6b"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#b7c0cc"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "invert_lightness": false
            },
            {
                "hue": "#0069FF"
            },
            {
                "saturation": -2
            },
            {
                "lightness": -13
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "invert_lightness": false
            },
            {
                "hue": "#0069FF"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 26
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
]
}); /* MARKER */
  var marker = new google.maps.Marker({position: {lat: 55.681507, lng: 12.579166}, map: map});
}
