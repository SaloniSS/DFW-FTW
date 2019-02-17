<!DOCTYPE html>
<html>
  <head>
    <title>DFW FTW</title>
    <meta name="viewport" content="initial-scale=1.0">
    
    <script type="text/javascript">
        
        var answers = <?= $answers ?>;

    </script>

    <?= style_link_tag('mapStyles') ?>
    <?= style_link_tag('main') ?>
    <?= script_tag('coordinates') ?>
    <?= script_tag('code') ?>
    <?= script_tag('markerclusterer') ?>
    <meta charset="utf-8">
  </head>
  <body id="results">
    
    <?= $head ?>

    <div id="floating-panel">
        <h1>Welcome to the Dallas-Forth Worth Area!</h1>
        <p>Based on your quiz results, we believe you are interested in the following. Feel free to change the selections.
        Click on a pin to see what the attraction is.</p>
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

            <div>
            <img src="http://maps.google.com/mapfiles/ms/icons/bus.png"/>
            Transit<input type="checkbox" onchange="toggleTransitMap()"/><br>
            </div>
        </form>
    </div>
    <div id="map"></div>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdEG7tAMN3rg2t5Wwxj25fEk86cxa8ZQ&callback=initMap"
    async defer></script>
  </body>
</html>