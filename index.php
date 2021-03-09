<!DOCTYPE html>
<html>
<head>
	<title>Meu Chá</title>
	<link rel="stylesheet" type="text/css" href="assets/estilo_nav_footer.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="assets/script.js"></script>

</head>
<body onload="FuncIndex()">
	<div id="contaier">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<div class="container-fluid">
    			<img class="containerImg" src="img/LogoMeucha.png">
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
       					 <li class="nav-item">
        	  				<a class="nav-link active" aria-current="page" href="">Home</a>
       		 			</li>
        				<li class="nav-item">
        	  			<a class="nav-link" href="">Link</a>
        				</li>
      				</ul>
      			</div>	
      			 <button class="btn btn-outline-primary me-2" id="btnLongin" type="button">Log-In</button>
  			</div>
		</nav>

		<div class="teste"></div>
		<div></div>
		<div></div>
	</div>
	
</body>
<?php
	include 'view/Layout/footer/footerIndex.php';
?>
</html>