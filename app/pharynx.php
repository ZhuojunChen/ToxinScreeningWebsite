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


<?php 
//initialize input variables
$chemErr = $runErr = $worm_typeErr = $dayErr = $dateErr = "";
$chem = $run = $worm_type = $day = $string = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

  //Get input data
  //Data for plate
  if (empty($_POST["chemical"])) {
    $chemErr = "Chemical is required";
  } else {
    $chem = test_input($_POST["chemical"]);
  }

  if (empty($_POST["run"])) {
    $runErr = "Run is required";
  } else {
    $run = test_input($_POST["run"]);
  }

  if (empty($_POST["worm_type"])) {
    $worm_typeErr = "Worm type is required";
  } else {
    $worm_type = test_input($_POST["worm_type"]);
  }

  if (empty($_POST["day"])) {
    $dayErr = "Day is required";
  } else {
    $day = test_input($_POST["day"]);
  }

  //Input for wells from checkboxes
  //Row A
  if (isset($_POST["A1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["A5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["A8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  //Row B
  if (isset($_POST["B1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["B5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["B8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  //Row C
  if (isset($_POST["C1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["C5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["C8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  //Row D
  if (isset($_POST["D1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["D5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["D8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  //Row E
  if (isset($_POST["E1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["E5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["E8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  //Row F
  if (isset($_POST["F1"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F2"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F3"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F4"])){
    $string .= "1";
  } else{
    $string .= "0";
  }  

  if (isset($_POST["F5"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F6"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F7"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  if (isset($_POST["F8"])){
    $string .= "1";
  } else{
    $string .= "0";
  }

  echo nl2br(" chemical: $chem 
    run: $run 
    worm type: $worm_type 
    day: $day
    string: $string \n"); 


  //Get id of the plate
  $query = "SELECT * FROM plate
  WHERE chemical = '$chem'
  AND run = '$run'
  AND worm_type = '$worm_type'
  AND day = '$day'";

  $select_id = mysqli_query($con, $query);
  echo "rows affected: " . mysqli_num_rows($select_id);
  echo nl2br("\n");

  if(mysqli_num_rows($select_id) >= 1){
  	//If the id exists, update the row
  	$row = mysqli_fetch_assoc($select_id);
  	$row_id = $row["id"];

  	$query = "UPDATE plate 
  	SET chemical='$chem', run='$run', worm_type='$worm_type', day='$day', pharynx='$string'
  	WHERE id='$row_id'";

  	if (mysqli_query($con, $query)) {
  		echo nl2br("Updated plate successfully \n");
  	} else {
  		echo "Error updating plate: " . mysqli_error($con);
  	}

  	echo "id: " . $row["id"];
  	echo PHP_EOL;
  }

  else{
  	//Otherwise, make a new row
  	$plate_insert = "INSERT INTO plate (chemical, run, worm_type, day, pharynx)
  	VALUES ('$chem', '$run', '$worm_type', '$day', '$string')";

  	mysqli_real_escape_string($con, $plate_insert);


  	if (mysqli_query($con, $plate_insert)) {
  		echo "Plate information recorded successfully";
  	} else {
  		echo "Error: Must enter plate information";
  		echo mysqli_error($con);
  	}
  }
}
?> 

      	<h1>Pharynx Extension</h1>

      	<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      		<div class="form-group">
      			<label for="chemical">Chemical Name</label>
      			<span class="error">* <?php echo $chemErr;?></span>
      			<input type="text" class="form-control" name="chemical" placeholder="Enter chemical name">
      		</div>

      		<label for="run">Run</label> 
    		<span class="error">* <?php echo $runErr;?></span> 
    		<br>
      		<label class="radio-inline">
      			<input type="radio" name="run" value="1">Run 1
      		</label>
      		<label class="radio-inline">
      			<input type="radio" name="run" value="2">Run 2
      		</label>

      		<div class="form-group">
      			<label for="worm_type">Worm Type</label>
      			<span class="error">* <?php echo $worm_typeErr;?></span>
      			<select class="form-control" name="worm_type">
      				<option>Full</option>
      				<option>Head</option>
      				<option>Tail</option>
      			</select>
      		</div>

      		<div class="form-group">
      			<label for="day">Day Number</label>
      			<span class="error">* <?php echo $dayErr;?></span>
      			<input type="number" class="form-control" name="day" placeholder="example: 7">
      		</div>

<!--
      		<div class="form-group">
      			<label for="date">Date</label>
      			<span class="error">* <?php //echo $dateErr;?></span>
      			<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY">
      		</div>
-->

      		<p>Click all worms that have a pharynx extension</p>

      		<!--The grid of buttons used to select for pharynx extension-->

      		<div class="container-fluid" align="center">
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A1" autocomplete="off" value='1'> A1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A2" autocomplete="off" value='1'> A2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A3" autocomplete="off" value='1'> A3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A4" autocomplete="off" value='1'> A4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A5" autocomplete="off" value='1'> A5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A6" autocomplete="off" value='1'> A6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A7" autocomplete="off" value='1'> A7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="A8" autocomplete="off" value='1'> A8
      					</label>
      				</div>
      			</div>
      		</div>

      		<div class="container-fluid" align="center">
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B1" autocomplete="off"> B1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B2" autocomplete="off"> B2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B3" autocomplete="off"> B3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B4" autocomplete="off"> B4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B5" autocomplete="off"> B5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B6" autocomplete="off"> B6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B7" autocomplete="off"> B7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="B8" autocomplete="off"> B8
      					</label>
      				</div>
      			</div>
      		</div>

      		<div class="container-fluid" align="center">
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C1" autocomplete="off"> C1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C2" autocomplete="off"> C2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C3" autocomplete="off"> C3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C4" autocomplete="off"> C4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C5" autocomplete="off"> C5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C6" autocomplete="off"> C6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C7" autocomplete="off"> C7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="C8" autocomplete="off"> C8
      					</label>
      				</div>
      			</div>
      		</div>

      		<div class="container-fluid" align="center">	
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D1" autocomplete="off"> D1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D2" autocomplete="off"> D2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D3" autocomplete="off"> D3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D4" autocomplete="off"> D4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D5" autocomplete="off"> D5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D6" autocomplete="off"> D6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D7" autocomplete="off"> D7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="D8" autocomplete="off"> D8
      					</label>
      				</div>
      			</div>    
      		</div>	

      		<div class="container-fluid" align="center">
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E1" autocomplete="off"> E1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E2" autocomplete="off"> E2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E3" autocomplete="off"> E3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E4" autocomplete="off"> E4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E5" autocomplete="off"> E5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E6" autocomplete="off"> E6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E7" autocomplete="off"> E7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="E8" autocomplete="off"> E8
      					</label>
      				</div>
      			</div>
      		</div>

      		<div class="container-fluid" align="center">
      			<div class="row">
      				<div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F1" autocomplete="off"> F1 
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F2" autocomplete="off"> F2
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F3" autocomplete="off"> F3
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F4" autocomplete="off"> F4
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F5" autocomplete="off"> F5
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F6" autocomplete="off"> F6
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F7" autocomplete="off"> F7
      					</label>
      					<label class="btn btn-primary">
      						<input type="checkbox" name="F8" autocomplete="off"> F8
      					</label>
      				</div>
      			</div>
      		</div>	

      		<div class="container" align="center">
      			<p><input type="submit" class="btn btn-md btn-success" name="submit"></p>
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