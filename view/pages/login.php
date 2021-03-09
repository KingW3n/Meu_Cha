<?php
if(!isset($_COOKIE["cookieUserMeuCha"])) {
    $user = "";
    $senha = "";
    $check = "false";
 } else {
   $user =  $_COOKIE["cookieUserMeuCha"];
   $senha = $_COOKIE["cookieSenhaMeuCha"];
   $check =  $_COOKIE["cookieLembrarMeuCha"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Meu Chá</title>
	<link rel="stylesheet" type="text/css" href="../../assets/estilo_nav_footer.css">
	<link rel="stylesheet" type="text/css" href="../../assets/estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="../../assets/script.js"></script>
</head>
<body onload="FuncLogin()">
	<div id="container" class="centercontainer	BackgroundColor1">
		<div id="boxLogin">
			<center>
				<img src="../../img/LogoMeucha.png" width="100px"><br>
				<br>
				<img class="redesocial" src="../../img/btnfacebook.png"><br>
				<img class="redesocial" src="../../img/btngoogle.png"><br>
			</center>
			<div id="formLogin" class="">
				<form method="POST" onsubmit="return false">
  					<div class="mb-3">
   						<label for="exampleInputEmail1" class="form-label">Usuario</label>
    					<input type="text" class="form-control" id="campuser" value="<?php echo $user ?>" aria-describedby="emailHelp" required="">
 					</div>
 					 <div id="validationServer03Feedback" class="invalid-feedback">
      					Usuario ou senha estão incorretos.
      					<br>
    				</div>
  					<div class="mb-3">
    					<label for="exampleInputPassword1" class="form-label">Password</label>
    					<input type="password" class="form-control" value="<?php echo $senha ?>" id="campsenha" required="">
  					</div>
  					<div class="mb-3 form-check">
    					<input type="checkbox" class="form-check-input" id="checkLembrarMim" <?php echo $check ?> >
    					<label class="form-check-label" for="exampleCheck1">Lembre-me</label>
  					</div>
  					<center><button type="submit" id="btnEntrar" class="btn btn-primary">Entrar</button></center>
  					<center><br><label class="lbFont80"><a href="recuperarsenha.php">Esqueci minha senha</a></label></center>
				</form>
			</div>
			<center><br><label class="lbFont80">Não tem uma conta? <a href="cadastro.php">Registre-se</a></label><br><br><br></center>
		</div>
	</div>
</body>
<?php
	include '../../view/Layout/footer/footerIndex.php';
?>
</html>