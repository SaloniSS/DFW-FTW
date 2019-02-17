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
        <form style="padding:10px">
            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/ltblu-pushpin.png"/>
            Kids<input type="checkbox" name="kids" id="kids" onchange="toggleCheckbox(this)"/><br>
            </div>

            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/ylw-pushpin.png"/>
            Art<input type="checkbox" name="art" id="art" onchange="toggleCheckbox(this)"/><br>
            </div>

            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/purple-pushpin.png"/>
            Sports<input type="checkbox" name="sport" id="sport" onchange="toggleCheckbox(this)"/><br>
            </div>

            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/grn-pushpin.png"/>
            Nature<input type="checkbox" name="nature" id="nature" onchange="toggleCheckbox(this)"/><br>
            </div>

            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/pink-pushpin.png"/>
            Music<input type="checkbox" name="music" id="music" onchange="toggleCheckbox(this)"/><br>
            </div>
        </form>
    </div>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdEG7tAMN3rg2t5Wwxj25fEk86cxa8ZQ&callback=initMap"
    async defer></script>
  </body>
</html>