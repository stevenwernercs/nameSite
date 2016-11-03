<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Website">
    <meta name="author" content="Steven Werner">
    <link rel="shortcut icon" href="/img/icon/ste.ico">

    <title><?php echo $pageTitle?></title>

    <!-- Bootstrap core CSS -->
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/resources/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/resources/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/resources/css/carousel.css" rel="stylesheet">
  <style type="text/css"></style><style id="holderjs-style" type="text/css"></style>
  <link href="/resources/css/style.css" rel="stylesheet">	
</head>
<!-- NAVBAR
================================================== -->
  <body role="document">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/index.php">steven<b>werner</b></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
	        <?php if($pageName=="home"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/index.php">home</a></li>
	        <?php if($pageName=="about"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/about.php">about</a></li>
	        <?php if($pageName=="tweets"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/tweets.php">tweets</a></li>
	        <?php if($pageName=="likes"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/likes.php">likes</a></li>
	        <?php if($pageName=="education"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/education.php">education</a></li>
	        <?php if($pageName=="projects"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/projects.php">projects</a></li>
	        <?php if($pageName=="resume"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/cv.php">curriculum vitae</a></li>
	        <?php if($pageName=="contact"){echo "<li class=\"active\">";}else{echo "<li>";}?><a href="/contact.php">contact</a></li>
              </ul>
            </div>
          </div>
        </div>

