<?php

 // Responsavel por registrar as alteracoes feitas em login
  function registrarLog($iduser, $acao,$resultado) {
    try {
      // Chama a conexao com o db
      $con = model_conexao();

      $data = new DateTime();
      $data = date_format($data, 'Y-m-d H:i:s');

      $ip = $_SERVER['REMOTE_ADDR'];
       
      $stmt = $con->prepare('INSERT INTO meuCha_Log (iduser, acao, hora, ip,resultado) VALUES(:iduser, :acao, :hora, :ip,:resultado)');
      $stmt->execute(array(
        ':iduser' => $iduser,
        'hora' => $data,
        'ip' => $ip,
        'acao' => $acao,
        'resultado' => $resultado
      ));
       
      if(!$stmt->rowCount()) {
        echo 'Erros: Não foi possivel adicionar o registro';
      }

    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
  }

  ?>