var map, bermudaTriangle, markerCluster, circles, infowindow;
var categories = {
    kids: {
        icon: "http://maps.google.com/mapfiles/ms/icons/ltblu-pushpin.png",
        array: childLocations,
        circleColor: "#41f4e5",
        radius: 1000
    },
    art: {
        icon: "http://maps.google.com/mapfiles/ms/icons/ylw-pushpin.png",
        array: artLocations,
        circleColor: "#f4ee42",
        radius: 1001
    }
}

function initMap() {
    var DFW = new google.maps.LatLng(32.8, -97);

    map = new google.maps.Map(document.getElementById('map'), {
        center: DFW,
        zoom: 11
    });

    markerCluster = new MarkerClusterer(map);
    circles = [];
    addMarkers(categories.kids);
    addMarkers(categories.art);
    document.getElementById("kids").checked = true;
    markerCluster.resetViewport();
    infowindow = new google.maps.InfoWindow();
}

function addMarkers(type) {
    var temp = type.array.map(function(location) {     // map is a js function
        circles.push(new google.maps.Circle({
            strokeColor: type.circleColor,
            strokeOpacity: 0.4,
            strokeWeight: 2,
            fillColor: type.circleColor,
            fillOpacity: 0.3,
            map: map,
            center: new google.maps.LatLng(location.lat, location.lng),
            radius: type.radius
        }));
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location.lat, location.lng),
            // label: location.label,
            title:location.label,
            icon: type.icon
        });
        google.maps.event.addListener(marker, 'click', (function(marker) {
            return function() {
              infowindow.setContent(marker.title);
              infowindow.open(map, marker);
            }
        })(marker));
        return marker;
    });
    var markers = markerCluster.getMarkers().concat(temp);     // remake the cluster of markers to include the new ones
    markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m', gridSize: parseInt(150), averageCenter: true});
}

function toggleCheckbox(checkboxElem) {
    if (checkboxElem.checked) {
        showMarkers(checkboxElem.name);
      } else {
        hideMarkers(checkboxElem.name);
    }
}

function hideMarkers(type) {
    var markers = markerCluster.getMarkers();
    for (let i in markers) {
        if (markers[i].getIcon === type.icon) markers[i].setMap(null);
    }
    for (let i in circles) {
        if (circles[i].getRadius() === categories[type].radius) {
            console.log("remove");
            markers[i].setMap(null);
        }
    }
    markerCluster.resetViewport();
    console.log("hide");
}

function showMarkers(type) {
    var markers = markerCluster.getMarkers();
    for (let i in markers) {
        if (markers[i].getIcon === type.icon) markers[i].setMap(map);
    }
    for (let i in circles) {
        if (circles[i].getRadius() === categories[type].radius) markers[i].setMap(map);
    }
    markerCluster.resetViewport();
    console.log("show");
}

function test() {
    var testCords = [
        {lat: 32.7, lng: -97},
        {lat: 33, lng: -97},
        {lat: 34, lng: -96}
    ];
    
    bermudaTriangle = new google.maps.Polygon({
        paths: testCords,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35
      });
    bermudaTriangle.setMap(map);
}

function toggleHeatmap() {
    markerCluster.setMap(markerCluster.getMap() ? null : map);
    alert("hello");
}