<?php session_start(); date_default_timezone_set('America/Los_Angeles');?>
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
          <li><a href="/scanID.php">Scan ID</a></li>
          <li class="active"><a href="/createplate.php">Create Plate</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>
      <h1>Plate ID: <?php echo $_SESSION['idnum']?></h1>

  <label for="chemical">Chemical Name</label> 
  <form role="form" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <input type="text" required class="form-control" name="chemical" placeholder="Enter the chemical name.">
  </div>
  
    <div class="form-group" align="left">
    <label for="run">Run</label><br>
    <label class="radio-inline">
      <input type="radio" name="run" value="1" required>Run 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="run" value="2">Run 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="run" value="3">Run 3
    </label>
    </div>
 
  <div class="form-group">
   <label for="day">Day Number</label>
    <select type="number" class="form-control" name="day" value='1' readonly='readonly'>
      <option>1</option>
    </select>
  </div>
  <div class="form-group">
    <label for="worm_type">Worm Type</label>
    <select class="form-control" name = "worm_type">
      <option>Full</option>
      <option>Head</option>
      <option>Tail</option>
    </select>
  </div>
  <div class="form-group">
    <label for="date">Entry Date</label>
    <span class="error"><?php //echo $dateErr;?></span>
    <input type="date" class="form-control" name="date" disabled='true' value='<?php echo date('Y-m-d'); ?>'>
  </div> 
  <div class="container" align="center">
  	  <p><input type="submit" class="btn btn-md btn-success" name="submit"></p>
  </div>
  </form>
  <br>
  <label>No Existing Entries. New Plate Entry. </label>
  <br>
  <?php
        $idnum = $_SESSION['idnum'];
         
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          $run = $_POST['run'];
          $chemical = $_POST['chemical'];
          $worm_type = $_POST['worm_type'];
          $day = $_POST['day'];
          $date = $_POST['date'];

          unset($_POST['chemical']);
          unset($_POST['run']);
          unset($_SESSION['idnum']);

          $query = "INSERT INTO plate (chemical, run, worm_type, day, plateid) VALUES ('$chemical', '$run', '$worm_type', '$day', '$idnum')";
          $select_id = mysqli_query($con, $query);

          if ($select_id) {
            echo "<script type='text/javascript'>
                alert('Successful Plate Creation');    
                window.location.href = 'livingstatus.php';
             </script>";
          } else {
            echo "Error updating plate: " . mysqli_error($con);
          }
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