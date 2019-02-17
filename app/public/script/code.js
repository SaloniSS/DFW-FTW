var map, bermudaTriangle, markerCluster, circles, infowindow, transitLayer;
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
    },
    sport: {
        icon: "http://maps.google.com/mapfiles/ms/icons/purple-pushpin.png",
        array: sportLocations,
        circleColor: "#8642f4",
        radius: 1002
    },
    nature: {
        icon: "http://maps.google.com/mapfiles/ms/icons/grn-pushpin.png",
        array: natureLocations,
        circleColor: "#44f429",
        radius: 1003
    },
    music: {
        icon: "http://maps.google.com/mapfiles/ms/icons/pink-pushpin.png",
        array: musicLocations,
        circleColor: "#f428ce",
        radius: 1004
    }
}

function initMap() {
    var DFW = new google.maps.LatLng(32.9, -97);

    map = new google.maps.Map(document.getElementById('map'), {
        center: DFW,
        zoom: 10
    });

    markerCluster = new MarkerClusterer(map);
    circles = [];
    addMarkers(categories.kids);
    document.getElementById("kids").checked = true;
    addMarkers(categories.art);
    document.getElementById("art").checked = true;
    addMarkers(categories.sport);
    document.getElementById("sport").checked = true;
    addMarkers(categories.nature);
    document.getElementById("nature").checked = true;
    addMarkers(categories.music);
    document.getElementById("music").checked = true;

    transitLayer = new google.maps.TransitLayer();
    transitLayer.setMap(null);

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
    console.log(markerCluster);
    var markers = markerCluster.getMarkers();
    for (let i in markers) {
        if (markers[i].getIcon() === categories[type].icon)  markers[i].setMap(null);
    }
    for (let i in circles) {
        if (circles[i].getRadius() === categories[type].radius) circles[i].setMap(null);
    }
    markerCluster.resetViewport();
}

function showMarkers(type) {
    var markers = markerCluster.getMarkers();
    for (let i in markers) {
        if (markers[i].getIcon() === categories[type].icon) markers[i].setMap(map);
    }
    for (let i in circles) {
        if (circles[i].getRadius() === categories[type].radius) circles[i].setMap(map);
    }
    markerCluster.resetViewport();
}

function processData() {
    var cities = {"Dallas": 0, "Fort Worth": 0, "Arlington": 0, "Plano": 0, "Irving": 0, "Grand Prairie": 0,
        "McKinney": 0, "Frisco": 0, "Glen Rose": 0, "Cedar Hill": 0, "Grapevine": 0};
    switch(answers.size) {
        case '3':
            cities["Dallas"] += 5;
            cities["Fort Worth"] += 5;
            break;
        case '2':
            cities["Arlington"] += 5;
            cities["Plano"] += 5;
            cities["Irving"] += 5;
            break;
        case '1':
            cities["Frisco"] += 5;
            cities["Gramd Prairie"] += 5;
            cities["McKinney"] += 5;
            break;
        case '0':
            cities["Grapevine"] += 5;
            cities["Glen Rose"] += 5;
            cities["Cedar Hill"] += 5;
            break;
    }
    switch(answers.children) {
    case '1':
        cities["Dallas"] += 3;
        cities["Fort Worth"] += 2;
        cities["Arlington"] += 2;
        cities["Grapevine"] += 2;
        cities["Frisco"] += 1;
        cities["Gramd Prairie"] += 1;
        cities["McKinney"] += 1;
        break;
    case '0':
        hideMarkers("kids");
        document.getElementById("kids").checked = false;
        break;
    }
    if (answers.art0 = '1') console.log("yes");
}

function toggleTransitMap() {
    transitLayer.setMap(transitLayer.getMap() ? null : map);
}