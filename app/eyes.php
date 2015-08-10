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
          <h3 class="text-muted">toxin_screening</h3>
        </div>




        <h1>Eyes</h1>
        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>

          <td>
            <select class="selectpicker" data-style="btn-primary" required>
              <option value=""></option>
              <option value=0>0</option>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
            </select>
          </td>
        </tr>

        <tr>
         <th>B</th>
         <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>

        <td>
          <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
          </select>
        </td>
      </tr>

      <tr>
       <th>C</th>
       <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
            <option value=""></option>
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>

      <td>
        <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
        </select>
      </td>
    </tr>

    <tr>
     <th>D</th>
     <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
          <option value=""></option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>

    <td>
      <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
      </select>
    </td>
  </tr>

  <tr>
   <th>E</th>
   <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
        <option value=""></option>
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>

  <td>
    <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
    </select>
  </td>
</tr>

<tr>
 <th>F</th>
 <td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
      <option value=""></option>
      <option value=0>0</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>

<td>
  <select class="selectpicker" data-style="btn-primary" required>
    <option value=""></option>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
  </select>
</td>
</tr>

</table>


<div class="container" align="center">
 <p><input type="submit" class="btn btn-md btn-success" name = submit></p>
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
<script type="text/javascript" src="app/styles/bootstrap-select.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- endbuild -->

<!-- build:js scripts/main.js -->
<!--  <script src="scripts/main.js"></script> -->
<!-- endbuild -->
</body>
</html>