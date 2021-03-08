<?php
	include_once '../config/db.php';
	
	//realiza o start da session
  		session_start();

//verifica qual função está chamando.
  	if (isset($_GET['f'])) {
//recebe o GET por parametro.
    	$function = $_GET['f'];
//verifica se existe a função que foi passada por GET
    	if (function_exists($function)) {
//caso a função exista chama ela.
      		call_user_func($function);
//depois de chamar fecha a função.
      		exit();
    	}
  	}

// Retorna os dados do user
  	function deslogar(){
    	session_destroy();
    	header("Location: ../../index.php");
  	}

  	function login(){
  		try {
// Chama a conexao com o db
      		$con = model_conexao();
      		extract($_POST);
      		if($check=="sim"){
      			setcookie("cookieUserMeuCha", $user, time()+(3600*720),"/");
      			setcookie("cookieSenhaMeuCha", $senha, time()+(3600*720),"/");
      			setcookie("cookieLembrarMeuCha", "checked", time()+(3600*720),"/");
      		}else{
      			setcookie("cookieUserMeuCha", $user, time(),"/");
      			setcookie("cookieSenhaMeuCha", $senha, time(),"/");
      			setcookie("cookieLembrarMeuCha", "", time(),"/");
      		}
// Teste de exemplo
      		$stmt = $con->prepare('SELECT * FROM meuCha__User WHERE user = :user AND senha = :senha');
      		$stmt->execute(array('user' => $user, 'senha' => $senha));
// Pega um array contendo todos os resultados
      		$result = $stmt->fetchAll();  
// Se um ou mais resultados forem retornados... 
      		if ( count($result) ) {
      			session_start();
            $_SESSION['idUser'] =  $result[0]['idUsers']; 
      		}else{	
          		echo "Error: Login ou senha não encontrado!";
      		}
    	} catch (PDOException $e) {
      		echo 'ERROR: ' . $e->getMessage();
    	}
    
  	}


?>