<!doctype html>
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
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/livingstatus.php">Living Status</a></li>
          <li class="active"><a href="/pharynx.php">Pharynx</a></li>
          <li><a href="/phototaxis.php">Phototaxis</a></li>
          <li><a href="/thermotaxis.php">Thermotaxis</a></li>
          <li><a href="/IOL.php">IOL</a></li>
          <li><a href="/curvature.php">Curvature</a></li>   
          <li><a href="/eyes.php">Eyes</a></li>
          <li><a href="/behavior.php">Behavior</a></li>
          <li><a href="/imagepath.php">Image</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>

    <h1>Pharynx Extension</h1>

<form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	<div class="form-group">
	    <label for="">Chemical Name</label>
	    <input type="text" class="form-control" id="chemical" placeholder="Enter chemical name">
	  </div>

	    <label class="radio-inline">
	      <input type="radio" name="optradio" value="run1">Run 1
	    </label>
	    <label class="radio-inline">
	      <input type="radio" name="optradio" value="run2">Run 2
	    </label>

	 <div class="form-group">
	  <label for="worm_type">Worm Type</label>
	  <select class="form-control" id="worm_type">
	    <option>Full</option>
	    <option>Head</option>
	    <option>Tail</option>
	  </select>
	</div>

	<div class="form-group">
	  <label for="day">Day Number</label>
	  <input type="number" class="form-control" id="day" placeholder="example: 7">
	</div>

	<div class="form-group">
	  <label for="date">Date</label>
	  <input type="date" class="form-control" id="date" placeholder="MM/DD/YYYY">
	</div>

<?php
// define variables and set to empty values
$chemical = $optradio = $worm_type = $day = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $chemical = test_input($_POST["chemical"]);
  $optradio = test_input($_POST["optradio"]);
  $worm_type = test_input($_POST["worm_type"]);
  $day = test_input($_POST["day"]);
  $date = test_input($_POST["date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <p>Click all worms that have a pharynx extension</p>

   <!--The grid of buttons used to select for pharynx extension-->

   <div class="container-fluid" align="center">
    <div class="row">
   	 <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
		<label class="btn btn-primary">
			<input type="checkbox" autocomplete="off"> A1 
		</label>
		<label class="btn btn-primary">
			  <input type="checkbox" autocomplete="off"> A2
		</label>
		<label class="btn btn-primary">
		 		<input type="checkbox" autocomplete="off"> A3
		</label>
		<label class="btn btn-primary">
			<input type="checkbox" autocomplete="off"> A4
		</label>
		<label class="btn btn-primary">
			  <input type="checkbox" autocomplete="off"> A5
		</label>
		<label class="btn btn-primary">
		 		<input type="checkbox" autocomplete="off"> A6
		</label>
		<label class="btn btn-primary">
			  <input type="checkbox" autocomplete="off"> A7
		</label>
		<label class="btn btn-primary">
		 		<input type="checkbox" autocomplete="off"> A8
		</label>
   </div>
   </div>
   </div>

   <div class="container-fluid" align="center">
    <div class="row">
    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> B1 
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> B2
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> B3
			</label>
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> B4
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> B5
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> B6
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> B7
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> B8
			</label>
		</div>
    </div>
   </div>

	<div class="container-fluid" align="center">
    <div class="row">
    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> C1 
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> C2
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> C3
			</label>
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> C4
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> C5
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> C6
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> C7
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> C8
			</label>
		</div>
    </div>
	</div>

    <div class="container-fluid" align="center">	
    <div class="row">
    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> D1 
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> D2
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> D3
			</label>
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> D4
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> D5
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> D6
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> D7
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> D8
			</label>
		</div>
    </div>    
    </div>	

    <div class="container-fluid" align="center">
    <div class="row">
    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> E1 
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> E2
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> E3
			</label>
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> E4
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> E5
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> E6
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> E7
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> E8
			</label>
		</div>
    </div>
	</div>

    <div class="container-fluid" align="center">
    <div class="row">
    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> F1 
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> F2
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> F3
			</label>
			<label class="btn btn-primary">
  			<input type="checkbox" autocomplete="off"> F4
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> F5
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> F6
			</label>
			<label class="btn btn-primary">
 			  <input type="checkbox" autocomplete="off"> F7
			</label>
			<label class="btn btn-primary">
 		 		<input type="checkbox" autocomplete="off"> F8
			</label>
		</div>
    </div>
    </div>	

        <div class="container" align="center">
        	<p><input type="submit" class="btn btn-md btn-success" name="submit"></p>
        </div>
        </form>

<?php
echo "<h2>Your Input:</h2>";
echo $chemical;
echo "<br>";
echo $optradio;
echo "<br>";
echo $worm_type;
echo "<br>";
echo $day;
echo "<br>";
echo $date;
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