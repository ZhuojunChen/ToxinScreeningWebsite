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
  
  <style>
	tab { padding-left: 4em; margin: 0px 0px 0px 0px; }
	label { padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;}
	.chemIn {
	  padding-top: 0px;
	  padding-bottom: 0px;
	  position: relative;
	  left: 4em;
	  margin-bottom: 5px;
	  padding-left: 4px;
	  min-width: 95%;
	}
	#rad {left: 10px;}
  </style>

  
  <body>
	<?php
		$platenum = 1;
		$getID = "SELECT MAX(plateID) + 1 as plateNum FROM plate";
		$getID = mysqli_query($con, $getID);
		$getID = mysqli_fetch_assoc($getID);

		if($getID['plateNum']) {
		  $platenum = $getID['plateNum'];
		}
		 
		if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($_POST['numCreate']))) {
		  $success = True;
		  if(!empty($_POST['run']))
			$run = $_POST['run'];
		  if(!empty($_POST['day']))
			$day = $_POST['day'];
		  if(!empty($_POST['date']))
			$date = $_POST['date'];

		  for($x = 1; $x <= $_SESSION['numCreate']; $x++) {
			$chemical = $_POST['chem'.($x)];
			$run = $_POST['run_chem'.($x)];

			$concA = $_POST['conc_chem'.($x).'concA'];
			$concB = $_POST['conc_chem'.($x).'concB'];
			$concC = $_POST['conc_chem'.($x).'concC'];
			$concD = $_POST['conc_chem'.($x).'concD'];
			$concE = $_POST['conc_chem'.($x).'concE'];
			$concF = $_POST['conc_chem'.($x).'concF'];

			if($run == '2') {
				$concT1 = $concA; 
				$concT2 = $concB;
				$concA = $concE;
				$concB = $concF;
				$concE = $concC;
				$concF = $concD;
				$concC = $concT1;
				$concD = $concT2;
			} else if($run == '3') {
				$concT1 = $concA; 
				$concT2 = $concB;
				$concA = $concC;
				$concB = $concD;
				$concC = $concE;
				$concD = $concF;
				$concE = $concT1;
			  	$concF = $concT2;
			}
			
			$queryF = "INSERT INTO plate (chemical, run, worm_type, day, plateid, date, concA, concB, concC, concD, concE, concF) VALUES ('$chemical', '$run', 'Full', '$day', '$platenum', '$date', '$concA', '$concB', '$concC', '$concD', '$concE', '$concF')";
			$platenum++;
			#$queryH = "INSERT INTO plate (chemical, run, worm_type, day, plateid, date, concA, concB, concC, concD, concE, concF) VALUES ('$chemical', '$run', 'Head', '$day', '$platenum', '$date', '$concA', '$concB', '$concC', '$concD', '$concE', '$concF')";
			#$platenum++;
			$queryT = "INSERT INTO plate (chemical, run, worm_type, day, plateid, date, concA, concB, concC, concD, concE, concF) VALUES ('$chemical', '$run', 'Tail', '$day', '$platenum', '$date', '$concA', '$concB', '$concC', '$concD', '$concE', '$concF')";
			$platenum++;

			$select_id1 = mysqli_query($con, $queryF);
			#$select_id2 = mysqli_query($con, $queryH);
			$select_id3 = mysqli_query($con, $queryT);
		  
			if (!$select_id1 || !$select_id3) {
				$success = False;
				echo "Error inserting plate: " . mysqli_error($con);
				break;
			}
		  }
		  $platenum--;
		  if($success == True) {
			$rownum = "SELECT id FROM plate WHERE plateid = '$platenum'";
			$rownum = mysqli_query($con, $rownum);
			$rownum = mysqli_fetch_assoc($rownum);
			$rownum = $rownum['id'];

			$_SESSION['idnum'] = $rownum;
			$_SESSION['platenum'] = $platenum;
			echo "<script type='text/javascript'>
				alert('Successful Plate Creation');    
				window.location.href = 'printpage.php';
			   </script>";
		  }
		} else {
		  $_SESSION['numCreate'] = $_POST['numCreate'];
		}
	  ?>
	<!--[if lt IE 10]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="container">
	  <div class="header">
		<ul class="nav nav-pills pull-right">
		  <li><a href="./index.php">Home</a></li>
		  <li><a href="./scanID.php">Plate Entry</a></li>
		  <li class="active"><a href="./createplate.php">Create Plate</a></li>
		</ul>
		<h3 class="text-muted">toxin_screening</h3>
	  </div>
	  <h1>
	  Plate ID<?php
		$range = $platenum - 1 + (($_POST['numCreate'])*2);
		if($_POST['numCreate'] < 1)
		  echo ": ".$platenum;
		else
		  echo "s: ".$platenum."-".$range;
	  ?>
	  </h1>


  <!-- Form started -->
  <form role="form" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
	<?php 
	  for ($x = 1; $x <= $_POST['numCreate']; $x++) {
		$str = "<br><label for='chemical'>Chemical ".$x." Name</label>
			   <input type='text' required class='form-control' name='chem".$x.
			   "' placeholder='Enter the name for chemical ".$x.
			   "'><tab><label>Run</label>
			  <label class='radio-inline' id='rad'>
				<input type='radio' name='run_chem".$x."' value='1' required>Run 1
			  </label>
			  <label class='radio-inline' id='rad'>
				<input type='radio' name='run_chem".$x."' value='2'>Run 2
			  </label>
			  <label class='radio-inline' id='rad'>
				<input type='radio' name='run_chem".$x."' value='3'>Run 3
			  </label></label><br><tab><label>Concentrations for chemical ".$x." (from run 1, low -> high, in nanomolar)</label>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '0' class='form-control' name='conc_chem".$x."concA' placeholder='Enter in nanomolar for row A' required>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '10' class='form-control' name='conc_chem".$x."concB' placeholder='Enter in nanomolar for row B' required>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '100' class='form-control' name='conc_chem".$x."concC' placeholder='Enter in nanomolar for row C' required>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '1000' class='form-control' name='conc_chem".$x."concD' placeholder='Enter in nanomolar for row D' required>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '10000' class='form-control' name='conc_chem".$x."concE' placeholder='Enter in nanomolar for row E' required>";
		$str .= "<input class='chemIn' type='number' step='any' min='0' value = '100000' class='form-control' name='conc_chem".$x."concF' placeholder='Enter in nanomolar for row F' required>";

		echo $str;
	   }
	?> 
  </div>
  

  <!-- Day Number -->
  <div class="form-group">
   <label for="day">Day Number</label>
	<select type="number" class="form-control" name="day" value='1' readonly='readonly'>
	  <option>1</option>
	</select>
  </div>


  <!-- Entry Date -->
  <div class="form-group">
	<label for="date">Entry Date</label>
	<span class="error"><?php //echo $dateErr;?></span>
	<input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
  </div> 


  <!-- Upload phototaxisFile -->
  <div class='form-group'>
	<label>Upload Phototaxis File </label>
	<input type="file" class="form-control" id="phototaxisFile" name="phototaxisFile" value="">

	<?php 
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["phototaxisFile"]["name"]);
		if (move_uploaded_file($_FILES["phototaxisFile"]["tmp_name"], $target_file)) {
        	echo "The file ". basename( $_FILES["phototaxisFile"]["name"]). " has been uploaded.";
    	} 
    	else {
        	echo "Sorry, there was an error uploading your file.";
    	}
	?>
	
  </div>

  <!-- Upload thermotaxisFile -->
   <div class='form-group'>
	<label>Upload Thermotaxis File </label>
	<input type="file" class="form-control" id="phototaxisFile" name="phototaxisFile" value="">
  </div>

  <!-- Upload IOLfile -->
   <div class='form-group'>
	<label>Upload IOL File </label>
	<input type="file" class="form-control" id="phototaxisFile" name="phototaxisFile" value="">
  </div>

  <!-- Sumbit -->
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