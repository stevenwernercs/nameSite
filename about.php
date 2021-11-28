<?php
$pageTitle="about:Werner";
$pageName="about";
require_once("header.inc");
?>
<style>
#map {
 height: 560px;
 width: 100%;
 overflow: hidden;
 float: left;
 border: thin solid #333;
 }
#overview {
  position: absolute;
  left: 40px;
  height: 175px;
  width: 175px;
  bottom: 50px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#capture {
 height: 100%;
 width: 100%;
 overflow: hidden;
 float: left;
 background-color: #ECECFB;
 border: thin solid #333;
 border-top: none;
 }
.selected { font-weight: bold; }
</style>


 <!-- static Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
	      <p><a href="http://en.wikipedia.org/wiki/Al_Asad_Airbase"  target="_blank"><img
    src="img/square/dust.jpg" width="200" height="200" class="img-circle"
    title="My last day in Al Asad"></a></p>
              <p style="font-size:40px">about <b>werner</b></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <br/>
    <br/>
        

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="https://www.goarmy.com" title="900th QM CO: US Army Reserves" target="_blank"><img class="img-square" src="img/square/TO.jpeg" style="width: 140px; height: 140px;"></a>
          <h2>US Army</h2>
          <p>Petroleum Supply Specialist, Honorably Discharged from the 900th Quartermaster Company in 2011.</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="https://www.m-v-t.com" title="Mesilla Valley Transportation" target="_blank"><img class="img-circle" src="img/square/mvt.jpg" style="width: 140px; height: 140px;"></a>
          <h2>CDL</h2>
          <p>Was the youngest age allowed by law to be an over the
      road truck driver, did that for 18 months. Always had plans for
      Graduate School but wanted to take some time to travel the states. School
      wasn't going anywhere.</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="https://www.kbr.com" title="KBR" target="_blank"><img class="img-circle" src="img/KBR-Inc-Logo.png" style="height: 140px;"></a>
          <h2>Accountant</h2>
          <p>ETS'ed out of the Military and became a contractor in Iraq for 18 months. Managed the accounting for the Hot Refuling farm and automated all reports, making 2 other accounting possistions obsolete.</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-4">
          <a href="https://www.utep.edu" title="UTEP" target="_blank"><img class="img-circle" src="img/square/miner.jpg" style="width: 140px; height: 140px;"></a>
          <h2>BS in CS</h2>
          <p>Recieved my Bacholar's Degree in Computer Science at The
      University of Texas at El Paso December 2013.
      Ten years after high school gradutation. A little older, but a lot wiser with more life under my belt.</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
	<div class="col-lg-4">
	  <a href="https://www.lymba.com" title="Lymba LLC" target="_blank"><img class="img-circle" src="img/square/Lymba.png" style="width: 140px; height: 140px;"></a>
          <h3>NLP</h3>
	  <p>Project Manager at a small in house Natural Language Processing Studio.
	     Specialized in Rule based NLP & Data Science</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
	<div class="col-lg-4">
	  <a href="https://www.rtx.com" title="Raytheon Technologies: Intellegence Information Services" target="_blank"><img class="img-circle" src="img/square/rtx.png" style="width: 140px; height: 140px;"></a>
          <h3>Data Science</h3>
	  <p>Sr Software Engineer at a leading Intellegence Contractor. Specializations in NLP, ML & Data Science</p>
          <!-- <p><a class="btn btn-default" href="http://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
     </div>
 
      <hr class="featurette-divider">
      
      <div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
		<div id="map"></div>
		<div id="overview"></div>
	</div>
	<div class="col-lg-2">
		<div id="toggle_box"></div>
		<br/>
		<ul>
			<li>Download theses &amp;open these in Google Earth for timeline support</li>
			<ul>
				<li><a href="documents/life-lowPrecision.kml">life-lowPrecision.kml</a></li>
				<li><a href="documents/wiki-1985-no-sports-over-1.kml">wiki-1985-present-high-viewed-events.kml</a></li>
			</ul>
		</ul>
	</div>
      </div>
      <div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-8">
		<div id="capture"></div>
	</div>
	<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG86U3_subBCpgXS4UOHWCi9nHzZ5Xhcc&callback=initMap">
	</script>
	</div>
      </div>
	
      <!-- /.row -->
      <!-- /END THE FEATURETTES -->

<script>
	let map, overview;
	const OVERVIEW_DIFFERENCE = 5;
	const OVERVIEW_MIN_ZOOM = 3;
	const OVERVIEW_MAX_ZOOM = 10;

	// lets define some vars to make things easier later
	var kml = {
	    a: {
	        name: "Life: Everywhere I spent more than a week at (Not Exact Locations)",
		url: "https://stevenwernercs.com/documents/life-lowPrecision.kml"
	    },
	    b: {
	        name: "Wiki: Events since 1985",
		url: "https://stevenwernercs.com/documents/wiki-1985-no-sports-over-1.kml"
	    }
	};

	function initMap() {
	  const mapOptions = {
	    center: { lat: 35, lng: -97},
	    zoom: 4,
	  };	
	  
	  map = new google.maps.Map(document.getElementById('map'), mapOptions);
	  
	  createTogglers();
	  
          startup();

	  // instantiate the overview map without controls
	  overview = new google.maps.Map(document.getElementById("overview"), {
	    ...mapOptions,
	    disableDefaultUI: true,
	    gestureHandling: "none",
	    zoomControl: false,
	  });

	  function clamp(num, min, max) {
	    return Math.min(Math.max(num, min), max);
	  };

	  map.addListener("bounds_changed", () => {
	    overview.setCenter(map.getCenter());
	    overview.setZoom(
	      clamp(
	        map.getZoom() - OVERVIEW_DIFFERENCE,
	        OVERVIEW_MIN_ZOOM,
	        OVERVIEW_MAX_ZOOM
	      )
	    );
	  });

	};

	//google.maps.event.addDomListener(window, 'load', initMap);

	// the important function... kml[id].xxxxx refers back to the top 
	function toggleKML(checked, id) {
	    if (checked) {

        	var layer = new google.maps.KmlLayer(kml[id].url, {
	            preserveViewport: true,
        	    suppressInfoWindows: false 
	        });

	 	/*layer.addListener('click', function(event) {
		    var content = event.featureData.infoWindowHtml;
		    var testimonial = document.getElementById('capture');
		    testimonial.innerHTML = content;
		});*/

        	// store kml as obj
	        kml[id].obj = layer;
        	kml[id].obj.setMap(map);
	    }
	    else {
	        kml[id].obj.setMap(null);
        	delete kml[id].obj;
	    }
	};

	// create the controls dynamically because it's easier, really
	function createTogglers() {
	    var html = "<form><ul>";
	    for (var prop in kml) {
        	html += "<li id=\"selector-" + prop + "\"><input type='checkbox' id='" + prop + "'" +
	        " onclick='highlight(this,\"selector-" + prop + "\"); toggleKML(this.checked, this.id)' \/>" +
	        "&nbsp" + kml[prop].name + "<\/li>";
	    }
	    html += "<li class='control'><a href='#' onclick='removeAll();return false;'>" +
	    "Remove all layers<\/a><\/li>" + 
	    "<\/ul><\/form>";
	
	    document.getElementById("toggle_box").innerHTML = html;
	};
	
	// easy way to remove all objects
	function removeAll() {
	    for (var prop in kml) {
	        if (kml[prop].obj) {
	            kml[prop].obj.setMap(null);
	            delete kml[prop].obj;
	        }
	    	document.getElementById(prop).checked = false;
	    }
	};
	
	// Append Class on Select
	function highlight(box, listitem) {
	    var selected = 'selected';
	    var normal = 'normal';
	    document.getElementById(listitem).className = (box.checked ? selected: normal);
	};

	function startup() { 
		// for example, this toggles kml b on load and updates the menu selector
		var checkit = document.getElementById('a');
		checkit.checked = true;
		toggleKML(checkit, 'a');
		highlight(checkit, 'selector-a');
	 }
		
</script>
<?php include_once("footer.inc"); ?> 
