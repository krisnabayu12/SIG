<div id="map" style="height: 500px;"></div>


<script>
var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

    var map = L.map('map', {
    center: [-7.309672695034329, 112.72908789673706],
    zoom: 14,
    layers: [peta1]
    });

    var baseMaps = {
    "Light": peta1,
    "Satelite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };

    L.control.layers(baseMaps).addTo(map);

var polygon = L.polygon([
    [-7.317619, 112.726426],
    [-7.316144, 112.727103],
    [-7.316173, 112.727283],
    [-7.314757, 112.728514],
    [-7.31287333253076, 112.72855273864673],
    [-7.3121825989859675, 112.72690899771075],
    [-7.310750, 112.725961],
    [-7.315549, 112.724352],
    [-7.316102, 112.725779],
    [-7.317241, 112.725382]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>UNESA Ketintang</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.300609460698277, 112.66826596376185],
    [-7.300695917065645, 112.6693337105175],
    [-7.2986641880139365, 112.66987847927038],
    [-7.298988400715487, 112.67528258529896],
    [-7.301428621870195, 112.67560368339423],
    [-7.303419134920185, 112.67433590868899],
    [-7.302630736360719, 112.66832488137135]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>UNESA Lidah Wetan</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.291371, 112.741504],
    [-7.291296967299312, 112.74160303558283],
    [-7.29134086587554, 112.74174854541194],
    [-7.291502, 112.741795]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>LaSalle College Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-6.183574, 106.834654],
    [-6.184790, 106.835351],
    [-6.182529, 106.835684]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>PPM School of Management</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.282496, 112.711343],
    [-7.281710, 112.711754],
    [-7.28190836988896, 112.7123140365312],
    [-7.282674461270253, 112.71205939441519]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Wijaya Kusuma Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.288445957329861, 112.7662422248674],
    [-7.28922331627092, 112.76600148295076],
    [-7.289406224061003, 112.7667237087007],
    [-7.28870507712677, 112.76691322893295]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Sekolah Tinggi Ilmu Ekonomi Indonesia Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.323899534976574, 112.7327650629937],
    [-7.324025293585948, 112.73370695452107],
    [-7.320827420786891, 112.73630621287064],
    [-7.3201267602007265, 112.73358921808016]
],{
    color: 'green',
    fillColor: '#008000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Islam Negeri Sunan Ampel</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.223528257173115, 112.74066164822727],
    [-7.223644258592929, 112.73967992772197],
    [-7.224342683182283, 112.74072498503367]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Pelayaran Surabaya Kampus 1</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.342514326448029, 112.79360702279882],
    [-7.3461002811892, 112.79312422517322],
    [-7.34617066366474, 112.79561625764607],
    [-7.344775091560945, 112.79726150559152],
    [-7.34310039927258, 112.79725428959175]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Pelayaran Surabaya Kampus 2</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.342514326448029, 112.79360702279882],
    [-7.3461002811892, 112.79312422517322],
    [-7.34617066366474, 112.79561625764607],
    [-7.344775091560945, 112.79726150559152],
    [-7.34310039927258, 112.79725428959175]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Pelayaran Surabaya Kampus 2</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2717307903760835, 112.81120365533623],
    [-7.269229785576814, 112.80939048203119],
    [-7.268016527168298, 112.81328504954439],
    [-7.269815128373955, 112.81472271358508]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Katolik Widya Mandala (UKWM) Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.289910157902663, 112.78965029165438],
    [-7.288878229366613, 112.79595473158183],
    [-7.286690532999334, 112.79772330384179],
    [-7.285968178061741, 112.79972075015289],
    [-7.278496895922345, 112.80040737229807],
    [-7.274823125920163, 112.79772330380867],
    [-7.276577458013952, 112.79037852728273]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Institut Teknologi Sepuluh November (ITS)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2855295432092095, 112.76305515685257],
    [-7.2876420081315025, 112.76353917134983],
    [-7.287680416492379, 112.76423615222575],
    [-7.285676775939526, 112.76472016672292]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Institut Teknologi Sepuluh November 2 (ITS)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.290795465559294, 112.79215629899771],
    [-7.295499245335411, 112.7912121614183],
    [-7.295509887311827, 112.79350813233971],
    [-7.293445338507122, 112.79509600008032],
    [-7.290401707998635, 112.79567535723105]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Hang Tuah (UHT)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.286236893280989, 112.76127296037626],
    [-7.286077260255275, 112.76004987305905],
    [-7.283725327086311, 112.76097255296574],
    [-7.283714699494031, 112.76217490161618],
    [-7.2850878447095795, 112.76239044362437]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Kesehatan Kemenkes Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.275879368158296, 112.79289495000353],
    [-7.277383953887089, 112.79292452552649],
    [-7.277513876091769, 112.79524409151021],
    [-7.276394867455447, 112.79548069568938],
    [-7.275490439034414, 112.79463441326754]
],{
    color: 'maroon',
    fillColor: '#800000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Elektronika Negeri Surabaya (PENS)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.3319341702393706, 112.78604486246527],
    [-7.334658286368961, 112.78609850664589],
    [-7.334892389332494, 112.7913663651713],
    [-7.3329237924912345, 112.79159167072991],
    [-7.332125710204663, 112.78790095112238]
],{
    color: 'green',
    fillColor: '#008000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>UPN Veteran Jatim</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2672586233777166, 112.75673363246777],
    [-7.2669074157922875, 112.76068184415894],
    [-7.264204172462919, 112.76026341955009],
    [-7.26374653517192, 112.75721643009071]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Airlangga Kampus A</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.273821919252603, 112.75644776365918],
    [-7.273776127185776, 112.75959611958545],
    [-7.269022884702779, 112.75990079919036],
    [-7.26915110384863, 112.75663241796464]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Airlangga Kampus B</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.269904992281849, 112.78232002701424],
    [-7.270788326145874, 112.78937960117457],
    [-7.263456753435232, 112.7895273544074],
    [-7.264070332912722, 112.78320562966047]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Airlangga Kampus C</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2995729926258415, 112.76628328218642],
    [-7.299637337568063, 112.76734283695697],
    [-7.297522727433531, 112.76749691776793],
    [-7.297427992960032, 112.76647441941886]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas 17 Agustus 1945 Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.301404731118325, 112.76342589633092],
    [-7.301415372957428, 112.76601154583693],
    [-7.299904229269654, 112.7659042574757],
    [-7.299616898554112, 112.76358682887277]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Perbanas Surabaya Kampus 1</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.308259861334183, 112.79362675956942],
    [-7.309877393160171, 112.79386279396415],
    [-7.309994451157119, 112.7952790003326],
    [-7.309313386017506, 112.79666302019267],
    [-7.30832371138571, 112.79716727549052]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Perbanas Surabaya Kampus 2</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2615189970534395, 112.78795223424203],
    [-7.260514865660045, 112.7901298768628],
    [-7.259355554033186, 112.78962319436296],
    [-7.259939506679962, 112.78742523210843]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Muhammadiyah Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.304835052434676, 112.7335283823954],
    [-7.304970037040929, 112.73612644833707],
    [-7.303804259551767, 112.73602747439644],
    [-7.3038778876936545, 112.7336644715638]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Nahdlatul Ulama Surabaya (UNUSA)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.277591127081222, 112.79539088473726],
    [-7.2769688646071, 112.7959976326844],
    [-7.277754343325006, 112.79673292892545],
    [-7.278861151911516, 112.79558113621222],
    [-7.277830850918844, 112.79559656200749]
],{
    color: 'navy',
    fillColor: '#000080',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Politeknik Perkapalan Negeri Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.3193555273868895, 112.71809870402343],
    [-7.32131172513481, 112.71761333990766],
    [-7.321563890626427, 112.71858406813918],
    [-7.319668825259464, 112.71894616517791]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Merdeka Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.339137594302582, 112.73738429666557],
    [-7.339603176593667, 112.74089990701866],
    [-7.339957423662615, 112.74087949708918],
    [-7.339927059639197, 112.73887932400005],
    [-7.339567751871264, 112.73730775943001]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Kristen Petra</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.285335051698943, 112.63100749866703],
    [-7.285822772162875, 112.63093081304109],
    [-7.286015175502661, 112.63178337676479],
    [-7.286408930917237, 112.63178337676479],
    [-7.286440252355818, 112.63212620662193],
    [-7.285630368740498, 112.63226153419713]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Ciputra Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.321071397824735, 112.73261307630045],
    [-7.321650936035564, 112.73246292046908],
    [-7.321200903633181, 112.73061208663981],
    [-7.3206116518903945, 112.73070675009872]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Universitas Bhayangkara Surabaya</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.312763575381922, 112.72883988037404],
    [-7.3114828435497765, 112.72720557412525],
    [-7.310549775393035, 112.72681183787397],
    [-7.3095658607763125, 112.72836042467812],
    [-7.310112480291632, 112.72982083571443]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Institut Teknologi Telkom Surabaya</b></h5>").addTo(map);

</script>