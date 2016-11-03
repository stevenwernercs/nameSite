 <!-- FOOTER -->
      
     </div><!-- /.container -->
    
    <footer class="footer">
      <div class="footer-container">
        <table width="100%">
            <th style="width: 33%" />
	    <th style="width: 33%" />
	    <th style="width: 33%" />
	  <tr>
	    <td>
		<p class="text-muted pull-left">Dallas, Texas</p>
	    </td>
	    <td>
	       <a data-toggle="tooltip" name="mywallet" title="<a href='https://www.coinbase.com/stevenwernercs' target='_blank'> <img style='width: 180px; height: 180px;' alt='my bitcoin wallet' title='feel free to deposit to my bitcoin wallet' src='/img/square/wallet.png'/></a>" href="https://www.coinbase.com/stevenwernercs" target="_blank">
		 <p class="text-muted" style="text-align:center">
		   <span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span>
		 </p>
	       </a>
	    </td>
	    <td>
              <p class="text-muted pull-right">&copy; 2014 – 
	   <?php
		date_default_timezone_set('US/Central');
		echo date('Y');
		echo ' ';
		echo $_SERVER['HTTP_HOST'];
	   ?> 
	      </p>
	    </td>
	  </tr>
        </table> 
      </div><!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/resources/js/jquery.min.js"></script>
    <!-- script>window.jQuery || document.write('<script src="/resources/js/jquery.min.js"><\/script>')</script-->
    <script src="/resources/js/bootstrap.min.js"></script>
    <!-- script src="/resources/js/docs.min.js"></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/resources/js/ie10-viewport-bug-workaround.js"></script>


 <script>
  $('a[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
    delay: { "show": 100, "hide": 1000 },
    html: true
  });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85222026-1', 'auto');
  ga('send', 'pageview');

</script> 

</body></html>
