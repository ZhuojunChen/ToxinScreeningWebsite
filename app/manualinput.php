<?php session_start(); ?>
<!doctype html>
<?php require 'connection.php'; ?>
<html class="no-js" lang="">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <style>
  #shapes {
    position:fixed;
    top:10%;
    left:75%;
  }
  img {
    height: 10%; 
    width: 10%;
  }
  </style>
    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css styles/main.css -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap-select.css">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- endbuild -->

    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>

    <!-- endbuild -->
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="./index.php">Home</a></li>
          <li class="active"><a href="./manualinput.php">Manual Input</a></li>
          <li><a href="./phototaxis.php">Phototaxis</a></li>
          <li><a href="./thermotaxis.php">Thermotaxis</a></li>
          <li><a href="./IOL.php">IOL</a></li>
          <li><a href="./behavior.php">Behavior</a></li>
          <li><a href="./imagepath.php">Image</a></li>
        </ul>
        <h3 class="muted">toxin_screening</h3>
    </div>
    <div id='shapes' class="container">
      0 Normal MISSING PHOTO<br>
      <img src='./src/normal.jpg'><br>
      1 C Shape<br>
      <img src='./src/cshape.jpg'><br>
      2 Contracted<br>
      <img src='./src/contracted.jpg'><br>
      3 Corkscrew<br>
      <img src='./src/corkscrew.jpg'>
      Pharynx Extrusion<br>
      <img src='./src/cpharynx.jpg'><br>
    </div>
    <h1>Manual Input</h1>
    <p> Press tab and the corresponding number to quickly make an entry.</p>
    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>A1</label>
      <select class="selectpicker" data-style="btn-primary" name="A1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A2</label>
      <select class="selectpicker" data-style="btn-primary" name="A2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A3</label>
      <select class="selectpicker" data-style="btn-primary" name="A3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A4</label>
      <select class="selectpicker" data-style="btn-primary" name="A4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A5</label>
      <select class="selectpicker" data-style="btn-primary" name="A5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A6</label>
      <select class="selectpicker" data-style="btn-primary" name="A6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A7</label>
      <select class="selectpicker" data-style="btn-primary" name="A7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>A8</label>
      <select class="selectpicker" data-style="btn-primary" name="A8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="A8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B1</label>
      <select class="selectpicker" data-style="btn-primary" name="B1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B2</label>
      <select class="selectpicker" data-style="btn-primary" name="B2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B3</label>
      <select class="selectpicker" data-style="btn-primary" name="B3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B4</label>
      <select class="selectpicker" data-style="btn-primary" name="B4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B5</label>
      <select class="selectpicker" data-style="btn-primary" name="B5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B6</label>
      <select class="selectpicker" data-style="btn-primary" name="B6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B7</label>
      <select class="selectpicker" data-style="btn-primary" name="B7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>B8</label>
      <select class="selectpicker" data-style="btn-primary" name="B8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="B8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C1</label>
      <select class="selectpicker" data-style="btn-primary" name="C1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C2</label>
      <select class="selectpicker" data-style="btn-primary" name="C2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C3</label>
      <select class="selectpicker" data-style="btn-primary" name="C3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C4</label>
      <select class="selectpicker" data-style="btn-primary" name="C4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C5</label>
      <select class="selectpicker" data-style="btn-primary" name="C5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C6</label>
      <select class="selectpicker" data-style="btn-primary" name="C6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C7</label>
      <select class="selectpicker" data-style="btn-primary" name="C7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>C8</label>
      <select class="selectpicker" data-style="btn-primary" name="C8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="C8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D1</label>
      <select class="selectpicker" data-style="btn-primary" name="D1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D2</label>
      <select class="selectpicker" data-style="btn-primary" name="D2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D3</label>
      <select class="selectpicker" data-style="btn-primary" name="D3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D4</label>
      <select class="selectpicker" data-style="btn-primary" name="D4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D5</label>
      <select class="selectpicker" data-style="btn-primary" name="D5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D6</label>
      <select class="selectpicker" data-style="btn-primary" name="D6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D7</label>
      <select class="selectpicker" data-style="btn-primary" name="D7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>D8</label>
      <select class="selectpicker" data-style="btn-primary" name="D8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="D8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E1</label>
      <select class="selectpicker" data-style="btn-primary" name="E1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E2</label>
      <select class="selectpicker" data-style="btn-primary" name="E2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E3</label>
      <select class="selectpicker" data-style="btn-primary" name="E3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E4</label>
      <select class="selectpicker" data-style="btn-primary" name="E4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E5</label>
      <select class="selectpicker" data-style="btn-primary" name="E5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E6</label>
      <select class="selectpicker" data-style="btn-primary" name="E6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E7</label>
      <select class="selectpicker" data-style="btn-primary" name="E7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>E8</label>
      <select class="selectpicker" data-style="btn-primary" name="E8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="E8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F1</label>
      <select class="selectpicker" data-style="btn-primary" name="F1P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F1S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F1E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F2</label>
      <select class="selectpicker" data-style="btn-primary" name="F2P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F2S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F2E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F3</label>
      <select class="selectpicker" data-style="btn-primary" name="F3P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F3S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F3E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F4</label>
      <select class="selectpicker" data-style="btn-primary" name="F4P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F4S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F4E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F5</label>
      <select class="selectpicker" data-style="btn-primary" name="F5P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F5S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F5E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F6</label>
      <select class="selectpicker" data-style="btn-primary" name="F6P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F6S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F6E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F7</label>
      <select class="selectpicker" data-style="btn-primary" name="F7P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F7S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F7E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <label>F8</label>
      <select class="selectpicker" data-style="btn-primary" name="F8P" required>
        <option value="">Pharnyx Extension</option>
        <option value='0'>0 Has extension</option>
        <option value='1'>1 Does not have extension</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F8S" required>
        <option value="">Curvature</option>
        <option value='0'>0 Normal</option>
        <option value='1'>1 C shape</option>
        <option value='2'>2 Contracted</option>
        <option value='3'>3 Corkscrew</option>
      </select>
      <select class="selectpicker" data-style="btn-primary" name="F8E" required>
        <option value="">Number of Eyes</option>
        <option value='0'>0 Eyes</option>
        <option value='1'>1 Eye</option>
        <option value='2'>2 Eyes</option>
        <option value='3'>3 Eyes</option>
        <option value='4'>4 Eyes</option>
      </select>
    <div class="container" align="center">
      <p><input type="submit" class="btn btn-md btn-success" id="submitBtn"></p>
    </div>
    </form>
         
  <?php
  //initialize input variables
  $phar = "";
  $eye = "";
  $shape = "";
  $row_id = $_SESSION['idnum'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Input for wells from checkboxes

    $phar .= $_POST['A1P'];
    $phar .= $_POST['A2P'];
    $phar .= $_POST['A3P'];
    $phar .= $_POST['A4P'];
    $phar .= $_POST['A5P'];
    $phar .= $_POST['A6P'];
    $phar .= $_POST['A7P'];
    $phar .= $_POST['A8P'];
    $phar .= $_POST['B1P'];
    $phar .= $_POST['B2P'];
    $phar .= $_POST['B3P'];
    $phar .= $_POST['B4P'];
    $phar .= $_POST['B5P'];
    $phar .= $_POST['B6P'];
    $phar .= $_POST['B7P'];
    $phar .= $_POST['B8P'];
    $phar .= $_POST['C1P'];
    $phar .= $_POST['C2P'];
    $phar .= $_POST['C3P'];
    $phar .= $_POST['C4P'];
    $phar .= $_POST['C5P'];
    $phar .= $_POST['C6P'];
    $phar .= $_POST['C7P'];
    $phar .= $_POST['C8P'];
    $phar .= $_POST['D1P'];
    $phar .= $_POST['D2P'];
    $phar .= $_POST['D3P'];
    $phar .= $_POST['D4P'];
    $phar .= $_POST['D5P'];
    $phar .= $_POST['D6P'];
    $phar .= $_POST['D7P'];
    $phar .= $_POST['D8P'];
    $phar .= $_POST['E1P'];
    $phar .= $_POST['E2P'];
    $phar .= $_POST['E3P'];
    $phar .= $_POST['E4P'];
    $phar .= $_POST['E5P'];
    $phar .= $_POST['E6P'];
    $phar .= $_POST['E7P'];
    $phar .= $_POST['E8P'];
    $phar .= $_POST['F1P'];
    $phar .= $_POST['F2P'];
    $phar .= $_POST['F3P'];
    $phar .= $_POST['F4P'];
    $phar .= $_POST['F5P'];
    $phar .= $_POST['F6P'];
    $phar .= $_POST['F7P'];
    $phar .= $_POST['F8P'];

    $eye .= $_POST['A1E'];
    $eye .= $_POST['A2E'];
    $eye .= $_POST['A3E'];
    $eye .= $_POST['A4E'];
    $eye .= $_POST['A5E'];
    $eye .= $_POST['A6E'];
    $eye .= $_POST['A7E'];
    $eye .= $_POST['A8E'];
    $eye .= $_POST['B1E'];
    $eye .= $_POST['B2E'];
    $eye .= $_POST['B3E'];
    $eye .= $_POST['B4E'];
    $eye .= $_POST['B5E'];
    $eye .= $_POST['B6E'];
    $eye .= $_POST['B7E'];
    $eye .= $_POST['B8E'];
    $eye .= $_POST['C1E'];
    $eye .= $_POST['C2E'];
    $eye .= $_POST['C3E'];
    $eye .= $_POST['C4E'];
    $eye .= $_POST['C5E'];
    $eye .= $_POST['C6E'];
    $eye .= $_POST['C7E'];
    $eye .= $_POST['C8E'];
    $eye .= $_POST['D1E'];
    $eye .= $_POST['D2E'];
    $eye .= $_POST['D3E'];
    $eye .= $_POST['D4E'];
    $eye .= $_POST['D5E'];
    $eye .= $_POST['D6E'];
    $eye .= $_POST['D7E'];
    $eye .= $_POST['D8E'];
    $eye .= $_POST['E1E'];
    $eye .= $_POST['E2E'];
    $eye .= $_POST['E3E'];
    $eye .= $_POST['E4E'];
    $eye .= $_POST['E5E'];
    $eye .= $_POST['E6E'];
    $eye .= $_POST['E7E'];
    $eye .= $_POST['E8E'];
    $eye .= $_POST['F1E'];
    $eye .= $_POST['F2E'];
    $eye .= $_POST['F3E'];
    $eye .= $_POST['F4E'];
    $eye .= $_POST['F5E'];
    $eye .= $_POST['F6E'];
    $eye .= $_POST['F7E'];
    $eye .= $_POST['F8E'];

    $shape .= $_POST['A1S'];
    $shape .= $_POST['A2S'];
    $shape .= $_POST['A3S'];
    $shape .= $_POST['A4S'];
    $shape .= $_POST['A5S'];
    $shape .= $_POST['A6S'];
    $shape .= $_POST['A7S'];
    $shape .= $_POST['A8S'];
    $shape .= $_POST['B1S'];
    $shape .= $_POST['B2S'];
    $shape .= $_POST['B3S'];
    $shape .= $_POST['B4S'];
    $shape .= $_POST['B5S'];
    $shape .= $_POST['B6S'];
    $shape .= $_POST['B7S'];
    $shape .= $_POST['B8S'];
    $shape .= $_POST['C1S'];
    $shape .= $_POST['C2S'];
    $shape .= $_POST['C3S'];
    $shape .= $_POST['C4S'];
    $shape .= $_POST['C5S'];
    $shape .= $_POST['C6S'];
    $shape .= $_POST['C7S'];
    $shape .= $_POST['C8S'];
    $shape .= $_POST['D1S'];
    $shape .= $_POST['D2S'];
    $shape .= $_POST['D3S'];
    $shape .= $_POST['D4S'];
    $shape .= $_POST['D5S'];
    $shape .= $_POST['D6S'];
    $shape .= $_POST['D7S'];
    $shape .= $_POST['D8S'];
    $shape .= $_POST['E1S'];
    $shape .= $_POST['E2S'];
    $shape .= $_POST['E3S'];
    $shape .= $_POST['E4S'];
    $shape .= $_POST['E5S'];
    $shape .= $_POST['E6S'];
    $shape .= $_POST['E7S'];
    $shape .= $_POST['E8S'];
    $shape .= $_POST['F1S'];
    $shape .= $_POST['F2S'];
    $shape .= $_POST['F3S'];
    $shape .= $_POST['F4S'];
    $shape .= $_POST['F5S'];
    $shape .= $_POST['F6S'];
    $shape .= $_POST['F7S'];
    $shape .= $_POST['F8S'];

    $query = "UPDATE plate SET pharynx='$phar', eyes='$eye', curvature='$shape' WHERE id='$row_id'";

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