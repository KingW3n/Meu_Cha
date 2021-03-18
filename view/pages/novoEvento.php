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
<body onload="funcNovoEvento()">
	<?php include "../Layout/sidebar.php";?>
	<div class="conteudo">
		<div id="novoEventoConvite">
			<div id="conteudoEventoConvite" class="">
			</div>
			<img id="LogoConviteNovoConvite" src="../../img/LogoMeucha.png">
		</div>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">

				<form method="POST" onsubmit="return false" class="row g-3">
					<div class="col-md-12">
            			<label for="inputTipoEvento" class="form-label">Selecione o tipo de Evento</label>
            			<select id="inputTipoEvento" class=" form-control form-select">
              				<option selected value="">Selecione..</option>
              				<option value="CR">Chá de revelação</option>
              				<option value="CF">Chá de frauda</option>
              				<option value="CN">Chá de casa nova</option>
              				<option value="CP">Chá de panela</option>
            			</select>
          			</div>
          			<div class="NovoEventoConteudo	dsplayNone">
          				<div class="row">
          					<div class="col-12" >
            					<label for="inputNomeEvento" class="form-label">Nome do evento:</label>
            					<input type="text" class="form-control" id="inputNomeEvento">
          					</div>
          					<div class="col-md-6">
            					<label for="inputNomeDele" class="form-label	labelNomeDele">Nome do papai</label>
            					<input type="text" class="form-control" id="inputNomeDele" placeholder="">
          					</div>
          					<div class="col-md-6">
            					<label for="inputNomeDela" class="form-label	labelNomeDela">Nome da mamãe</label>
            					<input type="text" class="form-control" id="inputNomeDela" placeholder="">
          					</div>
          					<div class="col-md-12	dsplayNone divNomeBebe">
            					<label for="inputNomedoBebe" class="form-label">Nome do Bebe <div id="emailHelp" class="form-text  col-12 "> <label class="lbFont70">Caso seja um chá revelação informe os nomes separados pelo &, exemplo: Julia & Ricardo. </label></div></label>
            					<input type="text" class="form-control" id="inputNomedoBebe" placeholder="">
          					</div>
          					<div class="col-6">
            					<label for="inputDataEvento" class="form-label">Data do evento</label>
            					<input type="date" class="form-control" id="inputDataEvento" min="<?php echo (date('Y-m-d')) ?>">
          					</div>
          					<div class="col-md-6">
            					<label for="inputHora" class="form-label">Hora do evento</label>
            					<input type="time" class="form-control" id="inputHora" placeholder="">
          					</div>
          					<div class="col-md-12">
            					<label for="inputuser" class="form-label">Endereço <div id="emailHelp" class="form-text  col-12 "><label class="lbFont70">Digite o endereço completo com numero , bairro e cidade. exemplo: Rua do abraço Nº 1950 - Boa vista - Itaboraí - Rj </label></div></label>
            					<input type="" class="form-control" id="inputuser">
          					</div>
          					<div class="col-12">
            					<center><button type="submit" id="btnCadastro" class="btn btn-primary top40 bot40 ">Cadastrar</button></center>
         					</div>
         				</div>
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
