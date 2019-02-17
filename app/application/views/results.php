<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <?= style_link_tag('mapStyles') ?>
    <?= script_tag('coordinates') ?>
    <?= script_tag('code') ?>
    <?= script_tag('markerclusterer') ?>
    <meta charset="utf-8">
  </head>
  <body>
    <div id="floating-panel">
        <button onclick="hideMarkers('kids')">Toggle</button>
        <form>
            Kids<input type="checkbox" name="kids" id="kids" onchange="toggleCheckbox(this)"/>
        </form>
    </div>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdEG7tAMN3rg2t5Wwxj25fEk86cxa8ZQ&callback=initMap"
    async defer></script>
  </body>
</html>