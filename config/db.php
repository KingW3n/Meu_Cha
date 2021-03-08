<?php
  // Servidor
  function model_conexao(){
    try {
        $con = new PDO('mysql:host=192.185.209.188;dbname=image862_w3nportfolio', 'image862_w_dados', 'C]sYso^hIPGM');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
          
        return $con;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
  }
?>