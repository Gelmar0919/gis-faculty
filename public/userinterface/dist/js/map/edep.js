
    

    var map = L.map('edep', {
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
            geometry: {
                type: "LineString",
                coordinates: [
                    [121.76313489675522, 16.935870296898273],
                    [121.7637115716934, 16.93762535430439],
                    [121.7638510465622, 16.93797687699236],
                    [121.76391005516051, 16.937996120916168],
                    [121.76404148340227, 16.93849774516905],
                    [121.7643016576767, 16.93925466925919],
                    [121.76458865404128, 16.94008599932675],
                    [121.76474791020155, 16.940517057915393],
                    [121.76523707807064, 16.940372730372957],
                    [121.76540873944758, 16.940341299026798],
                    [121.76577419042589, 16.940275870493473],
                    [121.76570277661085, 16.94008086767094],
                    [121.76578659564257, 16.940050077733122],
                    [121.76575072109698, 16.93993653979382],
                    [121.76570646464825, 16.939793494721894],
                    [121.76570244133472, 16.93978098629116],
                    [121.76571015268564, 16.939765591298322],
                    [121.76571283489466, 16.939775213168982],
                    [121.76578659564257, 16.939757252343348],
                    [121.76576111465693, 16.93967161766897],
                    [121.76584962755442, 16.939641148393406],
                    [121.76568634808064, 16.939146903981445],
                    [121.76545903086661, 16.938461181809625],
                    [121.76544964313509, 16.938420128204598],
                    [121.76544293761253, 16.938418203816656],
                    [121.76538359373808, 16.938237311260966],
                    [121.76535040140152, 16.93806155024239],
                    [121.76532626152037, 16.938060908778517],
                    [121.76521360874176, 16.937724781408672],
                    [121.76521025598048, 16.937701688666557],
                    [121.76520355045795, 16.937701688666557],
                    [121.76508150994778, 16.93733220440725],
                    [121.76475159823895, 16.93638026592404],
                    [121.76476232707499, 16.936377058576],
                    [121.76474221050738, 16.936312590868717],
                    [121.76473382860421, 16.936315798217866],
                    [121.76460172981024, 16.935890182508825],
                    [121.76449812948702, 16.935562069666002],
                    [121.76313355565073, 16.935867089541542],
                ],
            },
        },],
    };
   
    L.geoJSON(cauayanJSON,{
        style: function(){
            return { color: 'yellow', weight: 6 }
        }
    }).addTo(map);

    var varcreated = false;
    var marker;

    //L.marker([document.getElementById("lang").value,document.getElementById("lat").value]).addTo(map);
    L.marker([papaketchup[0].longitude,papaketchup[0].latitude]).addTo(map);
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

    document.getElementById("preview").src = "../../../imgs/depts/dynamic/"+ papaketchup[0].id +"." + extensions[papaketchup[0].id];
    

    


