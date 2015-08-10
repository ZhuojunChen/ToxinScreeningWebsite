<?php session_start(); ?>
<!doctype html>
<?php require 'connection.php'; ?>
<?php include("/Users/Yusef/Documents/Collins Lab/Toxin Screening Database/toxin_screening/app/password_protect.php"); ?>
<html class="no-js" lang="">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->

    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="/bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- bootstrap.js below is only needed if you wish to use the feature of viewing details 
     of text file preview via modal dialog -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

  
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/livingstatus.php">Living Status</a></li>
          <li><a href="/pharynx.php">Pharynx</a></li>
          <li><a href="/phototaxis.php">Phototaxis</a></li>
          <li><a href="/thermotaxis.php">Thermotaxis</a></li>
          <li><a href="/IOL.php">IOL</a></li>
          <li class="active"><a href="/curvature.php">Curvature</a></li>   
          <li><a href="/eyes.php">Eyes</a></li>
          <li><a href="/behavior.php">Behavior</a></li>
          <li><a href="/imagepath.php">Image</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>


 

    <h1>Curvature</h1>

    <p>Please select the curvature type observed. (Need Pictures )</p>
  
    <form role="form" method="post" enctype="multipart/form-data">
      <div class="form-group" align="center">
        <label class="radio-inline">
          <input type="radio" name="curv" value="1" required>Shape 1 Slim Straight
        </label>
        <label class="radio-inline">
          <input type="radio" name="curv" value="2">Shape 2 Stubby
        </label>
        <label class="radio-inline">
          <input type="radio" name="curv" value="3">Shape 3 Spiral
        </label>
      </div>
      <div class="container" align="center">
      	<p><input type="submit" class="btn btn-md btn-success" id="submitBtn"></p>
      </div>
    </form>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $row_id = $_SESSION['idnum'];
        
        $curv = $_POST['curv'];

        $query = "UPDATE plate SET curvature='$curv' WHERE id=$row_id";

        if (mysqli_query($con, $query)) {
          echo nl2br("Updated plate successfully \n");
        } else {
          echo "Error updating plate: " . mysqli_error($con);
        }
        
        echo "<script type='text/javascript'>
          document.getElementById(\"submitBtn\").disabled = true;
        </script>";
      }
    ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/carousel.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
        <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tab.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>