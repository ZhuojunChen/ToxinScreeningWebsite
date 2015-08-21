<?php session_start(); 
  $platenum = "http://www.barcodesinc.com/generator/image.php?code="; 
  $platenum .= $_SESSION['platenum']; 
  $platenum .= "&style=68&type=C128B&width=90&height=30&xres=1&font=3";
?>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- bootstrap.js below is only needed if you wish to use the feature of viewing details 
     of text file preview via modal dialog -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    <style>
      #cred
      {
        right:15px;
        bottom:0px;
        position:absolute;
      }
    </style>
  
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./livingstatus.php">Living Status</a></li>
          <li><a href="./pharynx.php">Pharynx</a></li>
          <li><a href="./phototaxis.php">Phototaxis</a></li>
          <li><a href="./thermotaxis.php">Thermotaxis</a></li>
          <li><a href="./IOL.php">IOL</a></li>
          <li><a href="./curvature.php">Curvature</a></li>   
          <li><a href="./eyes.php">Eyes</a></li>
          <li><a href="./behavior.php">Behavior</a></li>
          <li><a href="./imagepath.php">Image</a></li>
          <li class="active"><a href="./printpage.php">Print</a></li>
        </ul>
        <h3 class="text-muted">toxin_screening</h3>
      </div>

<script>
// Printing Script Credit: http://www.boutell.com/newfaq/creating/printpart.html
function makepage(src)
{
  // We break the closing script tag in half to prevent
  // the HTML parser from seeing it as a part of
  // the *main* page.

  return "<html>\n" +
    "<head>\n" +
    "<title>Temporary Printing Window</title>\n" +
    "<script>\n" +
    "function step1() {\n" +
    "  setTimeout('step2()', 10);\n" +
    "}\n" +
    "function step2() {\n" +
    "  window.print();\n" +
    "  window.close();\n" +
    "}\n" +
    "</scr" + "ipt>\n" +
    "</head>\n" +
    "<body onLoad='step1()'>\n" +
    "<img src='" + src + "'/>\n" +
    "</body>\n" +
    "</html>\n";
}

function printme(evt)
{
  if (!evt) {
    // Old IE
    evt = window.event;
  }    
  var image = evt.target;
  if (!image) {
    // Old IE
    image = window.event.srcElement;
  }
  src = image.src;
  link = "about:blank";
  var pw = window.open(link, "_new");
  pw.document.open();
  pw.document.write(makepage(src));
  pw.document.close();
}
</script>


    <h1>Print Barcode</h1>
    <p id="cred" align="right">Thanks to <a href="http://www.barcodesinc.com/generator/">http://www.barcodesinc.com/generator/</a> for the barcode generator.</p>
    <!-- File Upload and Submit Form-->
    <div class="container" align="center">
      <img <?php echo "src='$platenum'";?> alt="Free barcode generator" border="0" id="image" onclick="printme(event)">
      <br><?php echo "Barcode data: "." ".$_SESSION['platenum'];?><br><br>
      <p><input type="button" class="btn btn-md btn-success" value="Print" id="printBtn" onclick="$('#image').click()">
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