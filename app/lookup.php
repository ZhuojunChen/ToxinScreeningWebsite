<?php session_start(); date_default_timezone_set('America/Los_Angeles');?>
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
          <li><a href="./scanID.php">Plate Entry</a></li>
          <li class="active"><a href="./lookup.php">Existing Plate</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>
      <h1>Plate ID: <?php echo $_SESSION['platenum']?></h1>

  <label>Chemical</label><br>
  <div class="form-group">
  <input type="text" class="form-control" disabled="true" value="<?php
        if(($_SESSION['chem']))
          echo $_SESSION['chem'];
        else 
          echo 'No chemical indicated.';
  ?>">
  </div>
  <label>Run Number</label><br>
  <div class="form-group">
  <input type="text" class="form-control" disabled="true" value="<?php
        if(($_SESSION['run']))
          echo $_SESSION['run'];
        else 
          echo "No experiment number indicated.";
  ?>">
  </div>
  <form role="form" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="day">Day Number</label>
    <select class="form-control" name="day" required>
      <option value="">Select a day</option>
      <option value='1'>1</option>
      <option value='7'>7</option>
      <option value='12'>12</option>
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
    <label for="date">Today's Date</label>
    <span class="error"><?php //echo $dateErr;?></span>
    <input type="date" class="form-control" name="date" disabled='true' value='<?php echo date('Y-m-d'); ?>'>
  </div> 
  <div class="container" align="center">
  	  <p><input type="submit" class="btn btn-md btn-success" name="submit">
         <input type="button" class="btn btn-md btn-info" name="print" value="Print"
                onclick="location.href='printpage2.php'"></p>
  </div>
  <br>
  <label>Existing Entries</label>
  <br>
  <?php
        $platenum = $_SESSION['platenum'];
        $query = "SELECT worm_type, day FROM plate WHERE plateID = '$platenum' ORDER BY day";
        $select_id = mysqli_query($con, $query);

        while($row = mysqli_fetch_assoc($select_id)) {
          //traits of the row
          $worm_type = $row['worm_type'];
          $day= $row['day'];

          echo nl2br("day: $day
            worm type: $worm_type\n\n");
        }
         
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          $worm_type = $_POST['worm_type'];
          $day = $_POST['day'];

          $_SESSION['worm_type'] = $worm_type;
          $_SESSION['day'] = $day;

          $query = "SELECT id FROM plate WHERE day='$day' AND worm_type='$worm_type' AND plateID='$platenum'";
          $select_id = mysqli_query($con, $query);

          if ($row = mysqli_fetch_assoc($select_id)) { 
            $_SESSION['day'] = $day;
            $_SESSION['idnum'] = $row['id'];

            echo "<script type='text/javascript'>
              if(confirm(\"Do you really want to overwite an existing entry?\"))
                window.location.href = 'livingstatus.php';
            </script>";
          } else {
            echo "<script type=\"text/javascript\">
              if (confirm(\"Are you sure you want to create a new entry?\\nWorm Type: $worm_type \\nDay: $day\")) {
                  window.location.href = 'lookup.php?act=create';
              }
            </script>";
          }
        }
      ?>

      <?php
        if(isset($_GET['act']) && !empty(($_GET['act'] == "create")) {
          $run = $_SESSION['run'];
          $chem = $_SESSION['chem'];
          $day = $_SESSION['day'];
          $worm_type = $_SESSION['worm_type'];
          $platenum = $_SESSION['platenum'];

          $newRow = "INSERT INTO plate(chemical, run, worm_type, day, plateID) 
                    VALUES('$chem', '$run', '$worm_type', '$day', '$platenum')";

          if ($newRow = mysqli_query($con, $newRow)) {
            $query = "SELECT id FROM plate WHERE day='$day' AND worm_type='$worm_type' AND plateID='$platenum'";
            $select_id = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($select_id);

            $_SESSION['idnum'] = $row['id'];
            echo "<script type='text/javascript'>
                window.location.href = 'printpage.php';
            </script>";
          } else {
            echo "Error: ".mysqli_error($con);
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