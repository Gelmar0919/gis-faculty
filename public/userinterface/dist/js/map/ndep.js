
    

    var map = L.map('ndep', {
        zoomControl: true
    }).setView([16.937732, 121.764440], 17);

    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    googlemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var baseLayers = {
        "Google Map": googlemap,
        Satellite: googleSat,
        
    };

    
    L.control.layers(baseLayers, null, {position: 'topleft'}).addTo(map);

   
    var cauayanJSON = {
        type: "FeatureCollection",
        features: [{
            type: "Feature",
            properties: {},
            geometry:{"type":"Polygon","coordinates":[[[80.474853515625,7.487197039225007],[80.30593872070311,7.38098074033716],[80.64926147460936,7.345569620014823],[80.474853515625,7.487197039225007]]]},
        },],
    };
   
    L.geoJSON(cauayanJSON,{
        style: function(){
            return { color: 'yellow', weight: 6 }
        }
    }).addTo(map);

    var varcreated = false;
    var marker;
    map.on('click', function(e){
        if (varcreated === true){ 
            map.removeLayer(marker);
            marker = new L.marker(e.latlng).addTo(map);
        }else{
            marker = new L.marker(e.latlng).addTo(map);
            varcreated = true;
        }
        
        document.getElementById("lat").value = e.latlng.lat;
        document.getElementById("lang").value = e.latlng.lng;

        document.getElementById("lat").dispatchEvent(new Event('input'));
        document.getElementById("lang").dispatchEvent(new Event('input'));
    });

  
    

    


