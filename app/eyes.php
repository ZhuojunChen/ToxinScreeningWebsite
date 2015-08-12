<?php session_start(); ?>
<!doctype html>
<?php require 'connection.php'; ?>
<?php include("/Users/Yusef/Documents/Collins Lab/Toxin Screening Database/toxin_screening/app/password_protect.php"); ?>
<html class="no-js" lang="">
<head>

  <style>
    .selectpicker {
      padding: -2px;
      color: #FFFFFF;
      font-size: 12px;
      width: 100%;
      background-color: #428bca;
      -webkit-appearance: none;
    }
  </style>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- build:css styles/vendor.css -->
  <!-- bower:css -->
  <!-- endbower -->
  <!-- endbuild -->

  <!-- build:css styles/ -->
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/styles/bootstrap-select.css">
  <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- endbuild -->

  <!-- build:js scripts/vendor/modernizr.js -->
  <script src="/bower_components/modernizr/modernizr.js"></script>
  <!-- endbuild -->

    <!-- bootstrap.js below is only needed if you wish to use the feature of viewing details 
   of text file preview via modal dialog -->
 </head>  
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
            <li><a href="/curvature.php">Curvature</a></li>   
            <li class="active"><a href="/eyes.php">Eyes</a></li>
            <li><a href="/behavior.php">Behavior</a></li>
            <li><a href="/imagepath.php">Image</a></li>
          </ul>
          <h3 class="muted">toxin_screening</h3>
        </div>

        <h1>Eyes</h1>

        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <p>Indicate the number of eyes</p>

          <!--The grid of buttons used to select for pharynx extension-->
          <table style="width:100%">
          <tr>
            <th></th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
          </tr>

          <tr>
           <th>A</th>
           <td>
            <select class="selectpicker" data-style="btn-primary" name="A1" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A2" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A3" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A4" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A5" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A6" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A7" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" name="A8" required>
              <option value=""></option>
              <option value='0'>0 straight</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>
        </tr>

        <tr>
         <th>B</th>
         <td>
          <select class="selectpicker" data-style="btn-primary" name="B1" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B2" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B3" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B4" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B5" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B6" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B7" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" name="B8" required>
            <option value=""></option>
            <option value='0'>0 straight</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
          </select>
        </td>
      </tr>

      <tr>
       <th>C</th>
       <td>
        <select class="selectpicker" data-style="btn-primary" name="C1" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C2" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C3" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C4" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C5" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C6" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C7" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" name="C8" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
        </select>
      </td>
    </tr>

    <tr>
     <th>D</th>
     <td>
      <select class="selectpicker" data-style="btn-primary" name="D1" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D2" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D3" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D4" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D5" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D6" required>
          <option value=""></option>
          <option value='0'>0 straight</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D7" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" name="D8" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
      </select>
    </td>
  </tr>

  <tr>
   <th>E</th>
   <td>
    <select class="selectpicker" data-style="btn-primary" name="E1" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E2" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E3" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E4" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E5" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E6" required>
        <option value=""></option>
        <option value='0'>0 straight</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E7" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" name="E8" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>
  </td>
</tr>

<tr>
 <th>F</th>
 <td>
  <select class="selectpicker" data-style="btn-primary" name="F1" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F2" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F3" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F4" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F5" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F6" required>
      <option value=""></option>
      <option value='0'>0 straight</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F7" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" name="F8" required>
    <option value=""></option>
    <option value='0'>0 straight</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
  </select>
</td>
</tr>

</table>

  <div class="container" align="center">
    <p><input type="submit" class="btn btn-md btn-success" id="submitBtn"></p>
  </div>
</form>
<?php
//initialize input variables
$string = "";
$row_id = $_SESSION['idnum'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

  //Input for wells from checkboxes
  //Row A
  $string .= $_POST['A1'];
  $string .= $_POST['A2'];
  $string .= $_POST['A3'];
  $string .= $_POST['A4'];
  $string .= $_POST['A5'];
  $string .= $_POST['A6'];
  $string .= $_POST['A7'];
  $string .= $_POST['A8'];

  //Row B
  $string .= $_POST['B1'];
  $string .= $_POST['B2'];
  $string .= $_POST['B3'];
  $string .= $_POST['B4'];
  $string .= $_POST['B5'];
  $string .= $_POST['B6'];
  $string .= $_POST['B7'];
  $string .= $_POST['B8'];

  //Row C
  $string .= $_POST['C1'];
  $string .= $_POST['C2'];
  $string .= $_POST['C3'];
  $string .= $_POST['C4'];
  $string .= $_POST['C5'];
  $string .= $_POST['C6'];
  $string .= $_POST['C7'];
  $string .= $_POST['C8'];

  //Row D
  $string .= $_POST['D1'];
  $string .= $_POST['D2'];
  $string .= $_POST['D3'];
  $string .= $_POST['D4'];
  $string .= $_POST['D5'];
  $string .= $_POST['D6'];
  $string .= $_POST['D7'];
  $string .= $_POST['D8'];

  //Row E
  $string .= $_POST['E1'];
  $string .= $_POST['E2'];
  $string .= $_POST['E3'];
  $string .= $_POST['E4'];
  $string .= $_POST['E5'];
  $string .= $_POST['E6'];
  $string .= $_POST['E7'];
  $string .= $_POST['E8'];

  //Row F
  $string .= $_POST['F1'];
  $string .= $_POST['F2'];
  $string .= $_POST['F3'];
  $string .= $_POST['F4'];
  $string .= $_POST['F5'];
  $string .= $_POST['F6'];
  $string .= $_POST['F7'];
  $string .= $_POST['F8'];

  $query = "UPDATE plate SET eyes='$string' WHERE id='$row_id'";

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
        <script type="text/javascript" src="app/styles/bootstrap-select.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function () {
            $('.selectpicker').selectpicker({
              style: 'btn-info',
              size: 4
            });
          });
        </script>
        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <!-- <script src="scripts/main.js"></script> -->
        <!-- endbuild -->
      </body>
      </html>