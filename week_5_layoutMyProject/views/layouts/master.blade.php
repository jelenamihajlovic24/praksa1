<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="font/flaticon.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.theme.green.css">
		<!-- Core CSS file -->
	<link rel="stylesheet" href="css/photoswipe.css"> 

		<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
		In the folder of skin CSS file there are also:
		- .png and .svg icons sprite, 
		- preloader.gif (for browsers that do not support CSS animations) -->
	<link rel="stylesheet" href="css/default-skin/default-skin.css"> 
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script defer src="js/owl.carousel.min.js"></script>   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="jumbotron jumbotron-fluid text-center" style="margin-bottom:0">
    <h1>@yield('title')</h1>
  </div>

 
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img width="150px" src="images/jm_logo.png" alt="jm" class="img-fluid" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"><img src="images/home.png" class="img-fluid"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Početna stranica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rodjendanski_poklon">Rođendanski poklon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/omiljeni_film">Omiljeni film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/putovanja">Omiljeni grad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hobi">Hobi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/galerija">Galerija</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kviz">Kviz</a>
        </li>
      </ul>
    </div>
  </nav>
  
@yield("content")
  

  <div class="jumbotron text-center footer" style="margin-bottom:0">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 col-lg-6">
                    <p id="footer_date"></p>
            </div>
            <div class=" col-12 col-lg-6">
                    <p>&copy Jelena Mihajlović</p>
            </div>
        </div><!-- end row-->
    </div><!-- end fluid-->
  </div><!-- end jumbotron-->

  <!-- Core JS file -->
	<script src="js/photoswipe.min.js"></script> 

	<!-- UI JS file -->
	<script src="js/photoswipe-ui-default.min.js"></script> 
  <script src="js/galerija.js"></script>
  <script src="js/myScript.js"></script>
  <script src="js/footerDate.js"></script>
  <script src="js/poklonMap.js"></script>
  <script src="js/kviz.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6pQ9Da7eyTstIRG9Hw9O1ZUR1sFAHu48&callback=myMap"></script>
</body>

</html>