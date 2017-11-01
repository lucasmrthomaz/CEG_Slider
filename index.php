<?php include 'autoload.php'; ?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Gallery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  body {
      padding-top: 50px;
      padding-bottom: 20px;
      font-family: verdana;
      background-color: #333;
      color:#FFF;
    }

  .jumbotron{
      background-color: black;
      color: #FFF;
  }
  </style>
  <link rel="stylesheet" href="css/lightslider.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="container">
    <div class="row"> 
    <div class="col-md-12"> 
    <div class="sliderHolder">
      <ul id="lightSlider">
          <?php
            $fotos = new SliderPhotos();
            $profile = addslashes($_GET['profile']);
            $fotos->showItems($profile);
          ?>
      </ul>
        <?php
        //$profile_msg = addslashes($_GET['profile']);
        if(isset($_GET['debug']) == 1){
        if(empty($profile)){
            echo("</br>Exibindo as imagens do perfil: " . "PADRAO");
            echo("</br>Nao foi especificado um perfil.");
        }else{
            echo("</br>Exibindo as imagens do perfil: " . $profile);
        }
        }
        ?>
    </div>
  </div> 

  </div>


  </div>
  <!-- /container -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script src="js/vendor/lightslider.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>