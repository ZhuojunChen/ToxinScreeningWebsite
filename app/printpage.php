<?php session_start(); 
  $p1 = "http://www.barcodesinc.com/generator/image.php?code="; 
  $p2 .= "&style=68&type=C128B&width=90&height=35&xres=1&font=1";
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
          <li><a href="./manualinput.php">Manual Input</a></li>
          <li><a href="./phototaxis.php">Phototaxis</a></li>
          <li><a href="./thermotaxis.php">Thermotaxis</a></li>
          <li><a href="./IOL.php">IOL</a></li>
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
  // top: -15% left:3%
  return "<html>\n" +
    "<style>#bar{\nposition: relative;\ntop: -15%;\nleft: 3%;\n}</style>\n" +
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
    "<img id='bar' src='" + src + "'/>\n" +
    "</body>\n" +
    "</html>\n";
}

function makemultpage(src)
{
  // We break the closing script tag in half to prevent
  // the HTML parser from seeing it as a part of
  // the *main* page.
  // top: -15% left:3%
  var code = "<html>\n" +
    "<style>img{\ndisplay: block;\nposition: relative;\ntop: -15%;\nleft: 3%;\n}\n#bar{\npage-break-before: always;}</style>\n" +
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
    "<body onLoad='step1()'>\n";
  var srcs = src.split("==>");
  for(var i = 0; i < srcs.length; i++) {
    if(i > 0)
      code += "<img id='bar' src='" + srcs[i] + "'/>\n"
    else
      code += "<img src='" + srcs[i] + "'/>\n"
  }
  code += "</body>\n" + "</html>\n";
  return code;
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

function printAll()
{
  var imgs = document.getElementsByClassName("bc");
  link = "about:blank";
  var pw = window.open(link, "_new");
  pw.document.open();
  var source = "";
  for(var i = 0; i < imgs.length; i++) {
    if(source === "")
      source += imgs[i].src;
    else
      source += '==>' + imgs[i].src;
  }
  pw.document.write(makemultpage(source));
  pw.document.close();
}
</script>


    <h1>Print Barcode</h1>
    <p id="cred" align="right">Thanks to <a href="http://www.barcodesinc.com/generator/">http://www.barcodesinc.com/generator/</a> for the barcode generator.</p>
    <!-- File Upload and Submit Form-->
    <div class="container" align="center">
      <?php
        for($x = ($_SESSION['platenum'] - $_SESSION['numCreate']*3+1); $x <= $_SESSION['platenum']; $x++) {
          $query = "SELECT chemical, worm_type FROM plate WHERE plateid = $x";
          $query = mysqli_query($con, $query);
          $query = mysqli_fetch_assoc($query);
          $y = $query['chemical'];
          $z = $query['worm_type'];
          $plateIDStr = sprintf("%s%0000000000000012d%s", $p1, $x, $p2);
          $s = "<b>Chemical: </b>$y <b>Type: </b>$z <b>PlateID: </b>$x <b>Barcode: </b><img src='".$plateIDStr;
          $s .= "' alt='Free barcode generator' border='0' id='image' class='bc' onclick='printme(event)'>";
          //echo $plateIDStr; // display the source link that fetches the image
          echo $s."<br>";
        }
      ?>
      <br><?php echo "Barcode data: ".($_SESSION['platenum'] - $_SESSION['numCreate']*3+1)."-".$_SESSION['platenum'];?><br><br>
      <p><input type="button" class="btn btn-md btn-success" value="Print All" id="printBtn" onclick="printAll()">
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