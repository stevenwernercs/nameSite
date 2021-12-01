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
#slidersection {
  bottom: 200px;
}
#overview {
  left: 40px;
  height: 175px;
  width: 175px;
  //bottom: 200px;
  display:none;
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
.hide { display:none; }
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
		<div id="toggle_box"></div>
		<ul>
			<li>Or... download the KML files &amp; open these in Google Earth Pro for full timeline support</li>
			<ul>
				<li><a href="documents/life-lowPrecision.kml">life-lowPrecision.kml</a></li>
				<li><a href="documents/wiki-1985-no-sports-over-1.kml">wiki-1985-present-high-viewed-events.kml</a></li>
			</ul>
		</ul>
		<div id="overview"></div>
	</div>
	<div class="col-lg-8">
		<div id="map"></div>
		<div id="slidersection">
		  <ul>
			<li>Use sliders to control a subset:</li>
			<ul>
				<li>
					<label for="yearEndShow">Select Years Shown (Range: 1985-2021)</label>
					<output for="yearEndShow" id="yearEndShowVal"></output>
					<button id="minus">−</button>
					<input type="number" value="2021" id="yearEndShow" max=2021 min=1985 
						oninput="updateVal(this, this.value)" onchange="updateMap()" />
					<button id="plus">+</button>
					<!-- input id="yearEndShow" type="range" value="2021"
						oninput="updateVal(this, this.value)" onchange="updateMap()"
						min="1985" max="2021" step="1" -->
				</li>
				<li>
					<form>
					<label for="life">Life Locations</label>
					<input type="radio" id="life" name="showtype" value="life" 
						onchange="updateMap()" />
					<label for="both">&nbsp;&nbsp;&#124;&nbsp;&nbsp;Wiki Events</label>
					<input type="radio" id="wiki" name="showtype" value="wiki"
						onchange="updateMap()" />
					<label for="both">&nbsp;&nbsp;&#124;&nbsp;&nbsp;Both</label>
					<input type="radio" id="both" name="showtype" value="Both" checked="checked"
						onchange="updateMap()" />
					<form>
				</li>
				<li>
					<label for="yearSpanSize">Year Windows Size: (Google API: Max 10)</label>
					<output for="yearSpanSize" id="yearSpanSizeVal">1</output>
					<input id="yearSpanSize" type="range" value="1" 
						oninput="updateVal(this, this.value)" onchange="updateMap()"
						min="1" max="10" step="1">
				</li>
	    			<li>
					<a href='#' onclick='removeAll();return false;'>Remove all layers</a>
				</li>
			</ul>
		  </ul>
		</div>
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
		life_1985: {name: "life_1985", url: "https://stevenwernercs.com/documents/lifedata2/life-1985.kml"},
		life_1986: {name: "life_1986", url: "https://stevenwernercs.com/documents/lifedata2/life-1986.kml"},
		life_1987: {name: "life_1987", url: "https://stevenwernercs.com/documents/lifedata2/life-1987.kml"},
		life_1988: {name: "life_1988", url: "https://stevenwernercs.com/documents/lifedata2/life-1988.kml"},
		life_1989: {name: "life_1989", url: "https://stevenwernercs.com/documents/lifedata2/life-1989.kml"},
		life_1990: {name: "life_1990", url: "https://stevenwernercs.com/documents/lifedata2/life-1990.kml"},
		life_1991: {name: "life_1991", url: "https://stevenwernercs.com/documents/lifedata2/life-1991.kml"},
		life_1992: {name: "life_1992", url: "https://stevenwernercs.com/documents/lifedata2/life-1992.kml"},
		life_1993: {name: "life_1993", url: "https://stevenwernercs.com/documents/lifedata2/life-1993.kml"},
		life_1994: {name: "life_1994", url: "https://stevenwernercs.com/documents/lifedata2/life-1994.kml"},
		life_1995: {name: "life_1995", url: "https://stevenwernercs.com/documents/lifedata2/life-1995.kml"},
		life_1996: {name: "life_1996", url: "https://stevenwernercs.com/documents/lifedata2/life-1996.kml"},
		life_1997: {name: "life_1997", url: "https://stevenwernercs.com/documents/lifedata2/life-1997.kml"},
		life_1998: {name: "life_1998", url: "https://stevenwernercs.com/documents/lifedata2/life-1998.kml"},
		life_1999: {name: "life_1999", url: "https://stevenwernercs.com/documents/lifedata2/life-1999.kml"},
		life_2000: {name: "life_2000", url: "https://stevenwernercs.com/documents/lifedata2/life-2000.kml"},
		life_2001: {name: "life_2001", url: "https://stevenwernercs.com/documents/lifedata2/life-2001.kml"},
		life_2002: {name: "life_2002", url: "https://stevenwernercs.com/documents/lifedata2/life-2002.kml"},
		life_2003: {name: "life_2003", url: "https://stevenwernercs.com/documents/lifedata2/life-2003.kml"},
		life_2004: {name: "life_2004", url: "https://stevenwernercs.com/documents/lifedata2/life-2004.kml"},
		life_2005: {name: "life_2005", url: "https://stevenwernercs.com/documents/lifedata2/life-2005.kml"},
		life_2006: {name: "life_2006", url: "https://stevenwernercs.com/documents/lifedata2/life-2006.kml"},
		life_2007: {name: "life_2007", url: "https://stevenwernercs.com/documents/lifedata2/life-2007.kml"},
		life_2008: {name: "life_2008", url: "https://stevenwernercs.com/documents/lifedata2/life-2008.kml"},
		life_2009: {name: "life_2009", url: "https://stevenwernercs.com/documents/lifedata2/life-2009.kml"},
		life_2010: {name: "life_2010", url: "https://stevenwernercs.com/documents/lifedata2/life-2010.kml"},
		life_2011: {name: "life_2011", url: "https://stevenwernercs.com/documents/lifedata2/life-2011.kml"},
		life_2012: {name: "life_2012", url: "https://stevenwernercs.com/documents/lifedata2/life-2012.kml"},
		life_2013: {name: "life_2013", url: "https://stevenwernercs.com/documents/lifedata2/life-2013.kml"},
		life_2014: {name: "life_2014", url: "https://stevenwernercs.com/documents/lifedata2/life-2014.kml"},
		life_2015: {name: "life_2015", url: "https://stevenwernercs.com/documents/lifedata2/life-2015.kml"},
		life_2016: {name: "life_2016", url: "https://stevenwernercs.com/documents/lifedata2/life-2016.kml"},
		life_2017: {name: "life_2017", url: "https://stevenwernercs.com/documents/lifedata2/life-2017.kml"},
		life_2018: {name: "life_2018", url: "https://stevenwernercs.com/documents/lifedata2/life-2018.kml"},
		life_2019: {name: "life_2019", url: "https://stevenwernercs.com/documents/lifedata2/life-2019.kml"},
		life_2020: {name: "life_2020", url: "https://stevenwernercs.com/documents/lifedata2/life-2020.kml"},
		life_2021: {name: "life_2021", url: "https://stevenwernercs.com/documents/lifedata2/life-2021.kml"},
		life_2022: {name: "life_2022", url: "https://stevenwernercs.com/documents/lifedata2/life-2022.kml"},

	    b: {
	        name: "Wiki: Events since 1985",
		url: "https://stevenwernercs.com/documents/wiki-1985-no-sports-over-1.kml"
	    },
		wiki_1985: {name: "wiki_1985", url: "https://stevenwernercs.com/documents/wikidata/wiki-1985.kml"},
		wiki_1986: {name: "wiki_1986", url: "https://stevenwernercs.com/documents/wikidata/wiki-1986.kml"},
		wiki_1987: {name: "wiki_1987", url: "https://stevenwernercs.com/documents/wikidata/wiki-1987.kml"},
		wiki_1988: {name: "wiki_1988", url: "https://stevenwernercs.com/documents/wikidata/wiki-1988.kml"},
		wiki_1989: {name: "wiki_1989", url: "https://stevenwernercs.com/documents/wikidata/wiki-1989.kml"},
		wiki_1990: {name: "wiki_1990", url: "https://stevenwernercs.com/documents/wikidata/wiki-1990.kml"},
		wiki_1991: {name: "wiki_1991", url: "https://stevenwernercs.com/documents/wikidata/wiki-1991.kml"},
		wiki_1992: {name: "wiki_1992", url: "https://stevenwernercs.com/documents/wikidata/wiki-1992.kml"},
		wiki_1993: {name: "wiki_1993", url: "https://stevenwernercs.com/documents/wikidata/wiki-1993.kml"},
		wiki_1994: {name: "wiki_1994", url: "https://stevenwernercs.com/documents/wikidata/wiki-1994.kml"},
		wiki_1995: {name: "wiki_1995", url: "https://stevenwernercs.com/documents/wikidata/wiki-1995.kml"},
		wiki_1996: {name: "wiki_1996", url: "https://stevenwernercs.com/documents/wikidata/wiki-1996.kml"},
		wiki_1997: {name: "wiki_1997", url: "https://stevenwernercs.com/documents/wikidata/wiki-1997.kml"},
		wiki_1998: {name: "wiki_1998", url: "https://stevenwernercs.com/documents/wikidata/wiki-1998.kml"},
		wiki_1999: {name: "wiki_1999", url: "https://stevenwernercs.com/documents/wikidata/wiki-1999.kml"},
		wiki_2000: {name: "wiki_2000", url: "https://stevenwernercs.com/documents/wikidata/wiki-2000.kml"},
		wiki_2001: {name: "wiki_2001", url: "https://stevenwernercs.com/documents/wikidata/wiki-2001.kml"},
		wiki_2002: {name: "wiki_2002", url: "https://stevenwernercs.com/documents/wikidata/wiki-2002.kml"},
		wiki_2003: {name: "wiki_2003", url: "https://stevenwernercs.com/documents/wikidata/wiki-2003.kml"},
		wiki_2004: {name: "wiki_2004", url: "https://stevenwernercs.com/documents/wikidata/wiki-2004.kml"},
		wiki_2005: {name: "wiki_2005", url: "https://stevenwernercs.com/documents/wikidata/wiki-2005.kml"},
		wiki_2006: {name: "wiki_2006", url: "https://stevenwernercs.com/documents/wikidata/wiki-2006.kml"},
		wiki_2007: {name: "wiki_2007", url: "https://stevenwernercs.com/documents/wikidata/wiki-2007.kml"},
		wiki_2008: {name: "wiki_2008", url: "https://stevenwernercs.com/documents/wikidata/wiki-2008.kml"},
		wiki_2009: {name: "wiki_2009", url: "https://stevenwernercs.com/documents/wikidata/wiki-2009.kml"},
		wiki_2010: {name: "wiki_2010", url: "https://stevenwernercs.com/documents/wikidata/wiki-2010.kml"},
		wiki_2011: {name: "wiki_2011", url: "https://stevenwernercs.com/documents/wikidata/wiki-2011.kml"},
		wiki_2012: {name: "wiki_2012", url: "https://stevenwernercs.com/documents/wikidata/wiki-2012.kml"},
		wiki_2013: {name: "wiki_2013", url: "https://stevenwernercs.com/documents/wikidata/wiki-2013.kml"},
		wiki_2014: {name: "wiki_2014", url: "https://stevenwernercs.com/documents/wikidata/wiki-2014.kml"},
		wiki_2015: {name: "wiki_2015", url: "https://stevenwernercs.com/documents/wikidata/wiki-2015.kml"},
		wiki_2016: {name: "wiki_2016", url: "https://stevenwernercs.com/documents/wikidata/wiki-2016.kml"},
		wiki_2017: {name: "wiki_2017", url: "https://stevenwernercs.com/documents/wikidata/wiki-2017.kml"},
		wiki_2018: {name: "wiki_2018", url: "https://stevenwernercs.com/documents/wikidata/wiki-2018.kml"},
		wiki_2019: {name: "wiki_2019", url: "https://stevenwernercs.com/documents/wikidata/wiki-2019.kml"},
		wiki_2020: {name: "wiki_2020", url: "https://stevenwernercs.com/documents/wikidata/wiki-2020.kml"},
		wiki_2021: {name: "wiki_2021", url: "https://stevenwernercs.com/documents/wikidata/wiki-2021.kml"},

	};

	const minusButton = document.getElementById('minus');
	const plusButton = document.getElementById('plus');
	const inputField = document.getElementById('yearEndShow');
	const inputFieldVal = document.getElementById('yearEndShowVal');
	const inputSpan = document.getElementById('yearSpanSize');
	
	minusButton.addEventListener('click', event => {
	  event.preventDefault();
	  const currentValue = Number(inputField.value) || 0;
	  if(currentValue > inputField.min) {
		inputField.value = currentValue - 1;
		updateMap(inputField, inputField.value)
		lowerBound = Math.max(inputField.min, inputField.value - inputSpan.value);
		inputFieldVal.value = lowerBound + "-" + inputField.value
	  }
	});
	
	plusButton.addEventListener('click', event => {
	  event.preventDefault();
	  const currentValue = Number(inputField.value) || 0;
	  if(currentValue < inputField.max) {
	  	inputField.value = currentValue + 1;
	  	updateMap(inputField, inputField.value)
		lowerBound = Math.max(inputField.min, inputField.value - inputSpan.value);
		inputFieldVal.value = lowerBound + "-" + inputField.value
	  }
	});

	function updateVal(element, val) {
		document.getElementById(element.id + "Val").value = val;
		lowerBound = Math.max(inputField.min, inputField.value - inputSpan.value);
		inputFieldVal.value = lowerBound + "-" + inputField.value
	}

	function sleep(milliseconds) {
	  var start = new Date().getTime();
	  for (var i = 0; i < 1e7; i++) {
	    if ((new Date().getTime() - start) > milliseconds){
	      break;
	    }
	  }
	}

	function updateMap() {
		
		val = inputField.value
		startup("a", false);
		startup("b", false);
		var year = document.getElementById("yearEndShow").min;
		var span = document.getElementById("yearSpanSize").max;
		if(Number(val) > Number(span)) {
			year = val;
			span = document.getElementById("yearSpanSize").value;
		} else {
			year = document.getElementById("yearEndShow").value;
			span = val;
		}
		both = document.getElementById("both").checked;
		wiki = document.getElementById("wiki").checked;
		life = document.getElementById("life").checked;
		for (let i = 1985; i < 2022; i++) {
			var check = true;
			if(i <= (year - span) || i > year) {
				check = false;
			}
			startup("life_"+i, check && (both || life));
			startup("wiki_"+i, check && (both || wiki));
		}
	}

	function initMap() {
	  const mapOptions = {
	    center: { lat: 35, lng: -97},
	    zoom: 4,
	  };	
	  
	  map = new google.maps.Map(document.getElementById('map'), mapOptions);
	  
	  createTogglers();
	  
          startup('a', true);

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
	        if (!kml[id].obj) {
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
		}
        	kml[id].obj.setMap(map);
	    }
	    else {
	        if (kml[id].obj) {
		        kml[id].obj.setMap(null);
	        	//delete kml[id].obj;
		}
	    }
	};

	// create the controls dynamically because it's easier, really
	function createTogglers() {
	    var html = "<form><ul><li>Control KML Map Layers:</li><ul>";
	    for (var prop in kml) {
		classHtml = ""
		if (prop.includes("_")) {
			classHtml = "class=\"hide\""
		}
        	html += "<li " + classHtml + "id=\"selector-" + prop + "\"><input type='checkbox' id='" + prop + "'" +
	        " onclick='highlight(this.checked,\"selector-" + prop + "\"); toggleKML(this.checked, this.id)' \/>" +
	        "&nbsp" + kml[prop].name + "<\/li>";
	    }
	    html += "<li class='control'><a href='#' onclick='removeAll();return false;'>" +
	    "Remove all layers<\/a><\/li>" + 
	    "<\/ul><\/ul><\/form>";
	
	    document.getElementById("toggle_box").innerHTML = html;
	};
	
	// easy way to remove all objects
	function removeAll() {
	    for (var prop in kml) {
	        if (kml[prop].obj) {
	            kml[prop].obj.setMap(null);
	            //delete kml[prop].obj;
	        }
	    	document.getElementById(prop).checked = false;
	    	selector = document.getElementById("selector-" + prop);
		if (prop.includes("_")) {
			selector.className = "hide normal";
		} else {
			selector.className = 'normal';
		}
	    }
	};
	
	// Append Class on Select
	function highlight(check, listitem) {
	    var selected = 'selected';
	    var normal = 'normal';
	    document.getElementById(listitem).className = (check ? selected: normal);
	};

	function startup(id, check) { 
		// for example, this toggles kml b on load and updates the menu selector
		var checkit = document.getElementById(id);
		checkit.checked = check;
		toggleKML(check, id);
		highlight(check, 'selector-' + id);
	 }
		
</script>
<?php include_once("footer.inc"); ?> 
