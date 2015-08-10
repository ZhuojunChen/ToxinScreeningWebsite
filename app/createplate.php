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
    <?php
        $idnum = 1;
        $getID = "SELECT MAX(plateID) + 1 as plateNum FROM plate";
        $getID = mysqli_query($con, $getID);
        $getID = mysqli_fetch_assoc($getID);
          
        if($getID['plateNum']) {
          $idnum = $getID['plateNum'];
        }
         
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          $run = $_POST['run'];
          $chemical = $_POST['chemical'];
          $worm_type = $_POST['worm_type'];
          $day = $_POST['day'];
          $date = $_POST['date'];

          unset($_POST['chemical']);
          unset($_POST['run']);

          $query = "INSERT INTO plate (chemical, run, worm_type, day, plateid) VALUES ('$chemical', '$run', '$worm_type', '$day', '$idnum')";
          $select_id = mysqli_query($con, $query);

          if ($select_id) {
            $rownum = "SELECT id FROM plate WHERE plateid = '$idnum'";
            $rownum = mysqli_query($con, $rownum);
            $rownum = mysqli_fetch_assoc($rownum);
            $rownum = $rownum['id'];

            $_SESSION['idnum'] = $rownum;
            $_SESSION['platenum'] = $idnum;
            echo "<script type='text/javascript'>
                alert('Successful Plate Creation');    
                window.location.href = 'printpage.php';
             </script>";
          } else {
            echo "Error updating plate: " . mysqli_error($con);
          }
        }
      ?>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/scanID.php">Plate Entry</a></li>
          <li class="active"><a href="/createplate.php">Create Plate</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>
      <h1>Plate ID: <?php echo $idnum?></h1>

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
    <select class="form-control" name = "worm_type" required>
      <option value="">Select a type</option>
      <option value="Full">Full</option>
      <option value="Head">Head</option>
      <option value="Tail">Tail</option>
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
  <label>New Plate Entry.</label>
  <br>

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