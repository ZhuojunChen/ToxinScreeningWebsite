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
          <li><a href="./manualinput.php">Manual Input</a></li>
          <li><a href="./phototaxis.php">Phototaxis</a></li>
          <li><a href="./thermotaxis.php">Thermotaxis</a></li>
          <li><a href="./IOL.php">IOL</a></li>
          <li><a href="./behavior.php">Behavior</a></li>
          <li class="active"><a href="/imagepath.php">Image</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>


       <?php 
      //initialize input
      //need to copy from pharynx
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Create file name name
        $row_id= $_SESSION['idnum'];
        $file_name = "";
        $sql = "SELECT * FROM plate WHERE id='$row_id'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $file_name .= $row["chemical"];
          $file_name .= "_";
          
          if($row["worm_type"] == "Full")
            $file_name .= "f";
          else if($row['worm_type'] == "Head")
            $file_name .= "h";
          else if($row['worm_type'] == "Tail")
            $file_name .= "t";

          $file_name .= "_";
          $file_name .= "d";
          $file_name .= $row["day"];
          $file_name .= "_";
          $file_name .= "r";
          $file_name .= $row["run"];
        }

        //Set up file upload
        $target_dir = "uploads/images/";
        $file_info = pathinfo(basename($_FILES['image']['name']));
        $file_type = $file_info['extension']; 
        $target_file = $target_dir . $file_name . "." . $file_type;
        $uploadOK = 1;

        //Make sure file does not exist 
        if(file_exists($target_file)){
          echo "Sorry, :".$target_file.": file already exists. ";
          $uploadOK = 0;
        }

        //TO DO: Limit file type
        //Check if file is allowed to be uploaded
        if($uploadOK == 0){
          echo "Your file was not uploaded.";
        }

        //If so, upload file
        else if($uploadOK = 1) {
          if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". $file_name . " has been uploaded." . "<br>";

            $query = "UPDATE plate SET image='$target_file' WHERE id='$row_id'";

            if (mysqli_query($con, $query)) {
              echo nl2br("Updated plate successfully \n");
            } else {
              echo "Error updating plate: " . mysqli_error($con);
            }
            //Open the file
          //  $IOLfile = fopen("uploads/temp_file", "r"); 
          //  echo fread($IOLfile, filesize("temp/temp_file"));
          //  fclose($IOLfile);
          //  unlink("temp/temp_file");
          } 
          else {
            echo "There was an error uploading your file";
          }
        }
      }
      ?> 

    <h1>Image</h1>

    <p>Please upload images for each plate</p>
        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
          enctype="multipart/form-data">
   <!--The file upload button -->

     <input name="image" type="file" class="file">


   <!--Specify allowed file types
   <script>
	$("#phototaxis").fileinput({
    allowedFileExtensions: ["jpg"]
	});
   </script>-->

  

          <div class="container" align="center">
            <p><input type="submit" class="btn btn-md btn-success" name="submit"></p>
          </div>


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