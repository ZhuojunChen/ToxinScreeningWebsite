<?php session_start(); ?>
<!doctype html>
<?php require 'connection.php'; ?>
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
    <script src="bower_components/modernizr/modernizr.js"></script>
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
          <li><a href="./index.php">Home</a></li>
          <li><a href="./dbsearch.php">Data Search</a></li>
          <li class="active"><a href="./scanID.php">Plate Entry</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>


      <?php 
      //initialize input
      if(!empty($_SESSION['idnum'])) {
        unset($_SESSION['idnum']);
      }
      if(!empty($_SESSION['platenum'])) {
        unset($_SESSION['platenum']);
      }
      if(!empty($_SESSION['chem'])) {
        unset($_SESSION['chem']);
      }
      if(!empty($_SESSION['run'])) {
        unset($_SESSION['run']);
      }
      if(!empty($_SESSION['date'])) {
        unset($_SESSION['date']);
      }
      if(!empty($_SESSION['day'])) {
        unset($_SESSION['day']);
      }
      if(!empty($_SESSION['worm_type'])) {
        unset($_SESSION['worm_type']);
      }
      //need to copy from pharynx
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Transform data
        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        if (empty($_POST["ID"])) {
          // Should never be reached because of the bootstrap required form
          echo "<script type='text/javascript'>alert('Enter a valid integer!');</script>";
        } else {
          $_SESSION['platenum'] = test_input($_POST["ID"]);
          $platenum = $_SESSION['platenum'];
          $query = "SELECT id, chemical, run, worm_type FROM plate
          WHERE plateID = '$platenum'";

          $select_id = mysqli_query($con, $query);
          
          if(mysqli_num_rows($select_id) > 0) {
            $row = mysqli_fetch_assoc($select_id);
            $_SESSION['chem'] = $row['chemical'];
            $_SESSION['run'] = $row['run'];
            $_SESSION['worm_type'] = $row['worm_type'];

            echo "<meta http-equiv='refresh' content='0;lookup.php' />";
          } else {
            // Indicate that a new plate needs to be created
            echo "<script type='text/javascript'>alert('No previous plate entries found. Create a new plate.');</script>";
          }
        }

      }
      ?> 
    <h1>Plate Identification</h1>
<form role="form" method="post" enctype="multipart/form-data">
<div class="form-group">
  <label for="ID">ID Number</label>
  <input type="number" class="form-control" min='1' name = "ID" placeholder="Scan or type ID" required autofocus>
</div>

<div class="container" align="center">
  <p><input type="submit" class="btn btn-md btn-success" name="submit">
  <input type="button" class="btn btn-md btn-info" name="create" value="New Plate" 
         onclick="location.href='createplate.php';"></p>
</div>
</form>

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
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/carousel.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
        <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tab.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>