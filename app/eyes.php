<!doctype html>
<html class="no-js" lang="">
<head>

<style>

.selectpicker {
    padding: 0px;
    color: #FFFFFF;
    font-size: 12px;
    background: blue;
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
        <h3 class="text-muted">toxin_screening</h3>
      </div>


 

    <h1>Eyes</h1>

	<div class="form-group">
    <label for="">Chemical Name</label>
    <input type="text" class="form-control" id="chemical" placeholder="Enter chemical name">
  </div>

 <form role="form">
    <label class="radio-inline">
      <input type="radio" name="optradio">Run 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Run 2
    </label>
 </form>

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

 <div class="row">
 
<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<select class="selectpicker" data-style="btn-primary">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>
</div>

 <!--        <div class="panel panel-default">
            <div class="panel-body">
               <div class="btn-group">
                 <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
                   <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
                 </button>
                 <ul class="dropdown-menu" role="menu">
                   <li><a href="#">0</a></li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                 </ul>
               </div>
             </div>
          </div>

      </div>

   </div> -->



   <!--Specify allowed file types
   <script>
	$("#phototaxis").fileinput({
    allowedFileExtensions: ["jpg"]
	});
   </script>-->

  

        <div class="container">
        	<p><a class="btn btn-md btn-success" href="http://google.com">Submit</a></p>
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
      <!--  <script src="scripts/main.js"></script> -->
        <!-- endbuild -->
</body>
</html>