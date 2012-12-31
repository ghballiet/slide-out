<!DOCTYPE html>
<html lang="en">
  <head>
    <title>facebook slide-out</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/slide.js"></script>
  </head>
  <body>
    <div class="slide slide-left">
      <? include('menu.php'); ?>
    </div>

    <div class="slide slide-right">
      <? include('menu.php'); ?>
    </div>

    <div class="main">
      <div class="screen"></div>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="#">slide</a>
            <ul class="nav pull-right">
              <li><a class="click-right" href="#">right</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="jumbotron">
          <h1>sliding facebook app testing.</h1>
          <p class="lead">let's see if this works.</p>
        </div>
      </div>
    </div>
  </body>
</html>
