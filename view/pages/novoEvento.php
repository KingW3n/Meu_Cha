<!DOCTYPE html>
<html>
<head>
	<title>Novo Evento - Meu Chá</title>
	<link rel="icon" type="imagem/png" href="../../img/logoIconB.png" />
	<link rel="stylesheet" type="text/css" href="../../assets/estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/script.js"></script>

</head>
<body onload="">
	<?php include "../Layout/sidebar.php";?>
	<div class="conteudo">
		<div id="novoEventoConvite">
			<img id="LogoConviteNovoConvite" src="../../img/LogoMeucha.png">
		</div>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">

				<form method="POST" onsubmit="return false" class="row g-3">
					<div class="col-md-4">
            			<label for="inputTipoEvento" class="form-label">Tipo de Evento</label>
            			<select id="inputTipoEvento" class=" form-control form-select">
              				<option selected value="">Selecione..</option>
              				<option value="R">Chá de revelação</option>
              				<option value="CF">Chá de frauda</option>
              				<option value="CN">Chá de casa nova</option>
              				<option value="CP">Chá de panela</option>
            			</select>
          			</div>
          			<div class="col-12">
            			<label for="inputNomeEvento" class="form-label">Nome do evento:</label>
            			<input type="text" class="form-control" id="inputNomeEvento" >
          			</div>
          			<div class="col-md-6">
            			<label for="inputNomeDele" class="form-label">Nome do papai:</label>
            			<label for="inputNomeDele" class="form-label">Nome dele:</label>
            			<input type="text" class="form-control" id="inputNomeDele" placeholder="">
          			</div>
          			<div class="col-md-6">
            			<label for="inputNomeDela" class="form-label">Nome da mamãe:</label>
            			<label for="inputNomeDela" class="form-label">Nome dela:</label>
            			<input type="text" class="form-control" id="inputNomeDela" placeholder="">
          			</div>
          			<div class="col-md-12">
            			<label for="inputNomeDele" class="form-label">Nome do Bebe:</label>
            			<div id="emailHelp" class="form-text  col-12">Caso seja um chá revelação informe os nomes separados pelo &, exemplo: Julia & Ricardo.</div>
            			<input type="text" class="form-control" id="inputNomeDele" placeholder="">
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
			<div class="col-3"></div>
		</div>
	</div>
</body>
<footer>
	<?php include "../Layout/footer.php";?>
</footer>
</html>
