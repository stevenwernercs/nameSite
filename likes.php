<?php
$pageTitle="Steven:likes";
$pageName="likes";
require_once("header.inc");
?>

 <!-- static Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
	      <p><a href="http://en.wikipedia.org/wiki/Pai,_Thailand"
    target="_blank">
	      <img src="img/square/hamock.jpg" width="200" height="200"
    class="img-circle" title="Slow Life Inn, Pai, Thailand"></a></p>
              <p style="font-size:40px">some <b>likes</b></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <br/>
    <br/>
        
 <!-- START THE FEATURETTES -->
  <div class="container marketing">

    
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cognitive Computing:</h2>
          <p class="lead">Paths to building intelligent machines are being researched
		more then ever before. Big names include: <a href="http://bluebrain.epfl.ch/" target="_blank">The Blue Brain Project</a>, <a href="http://www.research.ibm.com/cognitive-computing/neurosynaptic-chips.shtml?lnk=ushpls1" target="_blank">IBM and The SyNAPSE Project</a>, 
		<a href="http://www.humanconnectomeproject.org/" target="_blank">The Human Connectome Project</a>, <a href="http://www.thinkwithgoogle.com/articles/transgressive-man.html" target="_blank">Google with Ray Kurzweil</a>, and <a href="http://www.rni.org/directors.html" target="_blank">Jeff Hawkins</a> with <a href="http://numenta.com/" target="_blank">Numenta</a> to name a few. <br/>
		Check out two great ways to help: <a href="http://www.eyewire.org" target="_blank">EyeWire.org</a> &amp; <a href="http://www.openWorm.org" target="_blank">OpenWorm.org</a></p>
        </div>
        <div class="col-md-5">
          <a href="http://www.EyeWire.org" target="_blank"><img class="featurette-image img-responsive"
        src="img/square/neuron.png" title="EyeWire.Org: where citizen scientists help map neurons" style="width: 400px; height: 400px;">
        </div>
      </div>

      <hr class="featurette-divider">


      <div class="row featurette">
        <div class="col-md-5">
          <a href="http://www.dwavesys.com/" target="_blank"><img class="featurette-image img-responsive"
        src="img/square/quantum.jpg" style="width: 400px; height: 400px;" title="D-wave"></a>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Quantum Computing: <span class="text-muted"><a href="http://www.dwavesys.com/" target="_blank">D-Wave</a></span></h2>
          <p class="lead">Vast potential yet to be
        realized. Currently designed to solve only discrete
        optimization problems. Maybe in the near future we will be
        able to do exhausted debugging, and enough power to
       compute millions of atomic reactions, redefining molecular
        dynamics simulations.<br/>
	Although I have major concerns about computer security with this kind of power; 
	I think a single quantum computer in the wrong hands is more 
	dangerous than weapons of mass destruction, and I'm not sure about what is being done about this.
	</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cryptocurrency: <span
        class="text-muted">like <a href="http://www.bitcoin.org/" target="_blank"><i>bitcoin</i></a></span></h2>
          <p class="lead">The potential for changing how governments and economies work is jaw dropping... 
          Fractional reserve banking will be a thing of the past, and governments can't print money to fund wars. <BR/>
	Watch bitcoin being transfered all over the world, or even listen to it at <a href="http://www.bitlisten.com/" target="_blank">BitListen.com</a><br/>
	Blockchain voting will fundamentally change the world as well, checkout BlockChain Voting: <a href="https://www.followmyvote.com/" target="_blank">FollowMyVote</a> &amp; <a href="http://www.democracy.earth/" target="_blank">Democracy Earth</a>
	  </p>
        </div>
        <div class="col-md-5">
          <!--a href="https://www.coinbase.com/stevenwernercs" target="_blank"><img class="featurette-image img-responsive"
        src="img/square/wallet.png" alt="my bitcoin wallet" title="feel free to deposit to my bitcoin wallet" style="width: 400px; height: 400px;"><a/-->
	   <!--iframe src="http://www.bitlisten.com/" id="bitListen" width="400" height="400" ></iframe>
	    <script>
		window.onload = function() {
			document.getElementById('bitListen').contentWindow.toggleInterface();
		};
	    </script-->
	   <iframe src="http://realtimebitcoin.info/" width="400" height="400"></iframe>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive"
          src="img/square/vsauce.jpg" title="learn while being entertained with Vsauce on youtube" style="width: 400px; height: 400px;">
        </div>
	<div class="col-md-7">
          <h2 class="featurette-heading"><a href="http://www.youtube.com/user/Vsauce" target="_blank">Vsauce</a>: <span
        class="text-muted"><small>Intelligent Entertainment</small></span></h2>
          <p class="lead">Check out Vsauce(ε &amp; 1 &amp; 2). Watch every video.<br/>
	</p>
        </div>
      </div>
      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Craft Beer: <span
        class="text-muted">Stouts, Trappists & IPAs</span></h2>
          <p class="lead">After rough day, slow sipping some good strong craft
	beer with close friends or colleagues is a great low-key relaxing way to take
	a load off. For me pairing a nice bitter extra hopy IPA with a good cheese selection or some 
	appetizers makes for a perfect night.
	<br/>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive"
        src="img/craftbeer.jpg" title="" style="width: 400px; height: 400px;">
        </div>
      </div>

      <!-- hr class="featurette-divider"-->
      <!-- /END THE FEATURETTES -->

<?php include_once("footer.inc"); ?>       
  
