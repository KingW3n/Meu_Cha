<!DOCTYPE html>
<html>
<head>
	<title>Login - Meu Chá</title>
	<link rel="stylesheet" type="text/css" href="../../assets/estilo_nav_footer.css">
	<link rel="stylesheet" type="text/css" href="../../assets/estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="../../assets/script.js"></script>
</head>
<body onload="funcCadastro()">
	<div id="container" class="centercontainer	BackgroundColor1">
		<div id="boxCadastro">
			<div id="formCadastro" class="">
        <center>
          <img src="../../img/LogoMeucha.png" width="100px"><br><br>
          <label id="labelNovoUser"><img src="../../img/new-user.svg">Novo Usuario</label>
        </center>
				<form method="POST" onsubmit="return false" class="row g-3">
          <div class="col-12">
            <label for="inputNome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome" >
          </div>
          <div class="col-md-6">
            <label for="inputEmail" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="meucha@exemple.com">
          </div>
          <div class="col-md-6">
            <label for="inputuser" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="inputuser">
          </div>
  			  <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Confirme a senha:</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
            <div id="emailHelp" class="form-text  col-12">We'll never share your email with anyone else.</div>
          <div class="col-6">
            <label for="inputNasminto" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="inputNasminto" min="1920-01-01">
          </div>
          <div class="col-md-6">
            <label for="inputTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control  telefoneMask" id="inputTelefone" placeholder="(21)00000-0000">
          </div>
          <div class="col-md-6">
            <label for="inputSexo" class="form-label">Sexo</label>
            <select id="inputSexo" class=" form-control form-select">
              <option selected value="" ="">Selecione..</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outros</option>
              <option value="N">Não Informar</option>
            </select>
          </div>
          <div class="col-12">
            <center><button type="submit" id="btnCadastro" class="btn btn-primary  top40">Cadastrar</button></center>
          </div>
				</form>
			</div>
      <br><br>
		</div>
	</div>
</body>
<?php
	include '../../view/Layout/footer/footer.php';
?>
</html>