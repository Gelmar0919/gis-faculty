
    

    var map = L.map('maps', {
        zoomControl: true
    }).setView([16.937732, 121.764440], 18);

    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    googlemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var baseLayers = {
        Satellite: googleSat,
        "Google Map": googlemap
    };

    String.prototype.toProperCase = function () {
        return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    };

    function getAge(birthday) {
        const millis = Date.now() - Date.parse(birthday);
        return new Date(millis).getFullYear() - 1970;
    };


    function clickme(id){
        faculty_data = faculty.filter(data => data.id == id);
        var d = new Date(faculty_data[0].birthday);


        document.getElementById("subjects").innerHTML = faculty_data[0].subjects;
        document.getElementById("bd").innerHTML = faculty_data[0].bd;
        document.getElementById("md").innerHTML = faculty_data[0].md;
        document.getElementById("dd").innerHTML = faculty_data[0].dd;
        document.getElementById("bdy").innerHTML = faculty_data[0].bdy;
        document.getElementById("mdy").innerHTML = faculty_data[0].mdy;
        document.getElementById("ddy").innerHTML = faculty_data[0].ddy;

        document.getElementById("img").src = "../../../imgs/faculties/dynamic/"+ faculty_data[0].id +"." + extensionsfaculty[faculty_data[0].id];
        document.getElementById("name").innerHTML = faculty_data[0].name;
        document.getElementById("gender").innerHTML = faculty_data[0].gender;
        document.getElementById("address").innerHTML = faculty_data[0].address;
        document.getElementById("birthday").innerHTML = d.toLocaleDateString();
        document.getElementById("age").innerHTML = getAge(d);
        document.getElementById("cstatus").innerHTML = faculty_data[0].cstatus;

        
        /* alert(JSON.stringify(faculty_data[0])); */
        /* document.getElementById("contact").innerHTML = faculty_data[0].contact;
        document.getElementById("fb").innerHTML = faculty_data[0].fb;
        document.getElementById("email").innerHTML = faculty_data[0].email;

        document.getElementById("position").innerHTML = faculty_data[0].position;
        document.getElementById("schedule").innerHTML = faculty_data[0].scheduleSY; */
        
        $( "#modal" ).click();
    };

    L.control.layers(baseLayers, null, {position: 'topleft'}).addTo(map);

    //SAMPLES
    //alert(JSON.stringify(faculty));

    department.forEach(data => {
        
        var myIcon = L.icon({
            iconUrl: '../../../imgs/depts/dynamic/'+ data.id +"." + extensions[data.id],
            iconSize: [48, 50]
        });
        L.marker([data.longitude, data.latitude], {
            icon: myIcon
        }).addTo(map).on('click', click);

        function click(e)
        {
            JSON.stri
            const popupContent = getcontent(data.code, faculty.filter((fdata) => fdata.department_id == data.id));
            
            e.target.unbindPopup()
            e.target.bindPopup(popupContent);
            e.target.openPopup();
            
        }
    });

    
    //marker.fire('click'); //select 
    //var papa = {}
    //papa['d1'] = {}               

    function getcontent(data, fdata){
        var Instructors = "";
        //alert(JSON.stringify(fdata))
        fdata.forEach((fdatac, fid) => {
            //alert(fdatac.id)
            Instructors += `<button onclick="clickme(i = `+ fdatac.id +`)" type="button" class="d-flex justif-content-start btn w-100 btn-outline-secondary  btn-sm">`
            + (fid + 1) + `. ` + fdatac.name + `</button>`
        })
        
        var sample = 
        `<div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title w-100">
                    <div class="col-md-12 text-lg d-flex justify-content-center align-items-center">`+ data.toUpperCase() +`
                    </div>
                </h3>
            </div>
            <div class="card-body p-0" style="max-height: 150px; overflow: auto; overflow-x: hidden;">
            <table class="table table-sm" style="min-width: 300px; " >
                <thead>
                <tr>
                    <th class='' style="font-size: 16px">Faculty</th>
                </tr>
                </thead>
                <tbody style="">
                <tr style="border:none; " >
                    <td class="w-100 p-0 py-0" style="">` + 
                    Instructors
                    + `</td>
                </tr>
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>`

        return sample;
    }
   
    

    
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

  
    

    


