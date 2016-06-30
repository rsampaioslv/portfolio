<?php
	 session_start();
      require_once("config/config.php");

      if(isset($_REQUEST["contact"])){
           if(empty($_POST["cont_name"]) || empty($_POST["cont_email"]) || empty($_POST["cont_mensagem"])){
                echo "<script>alert('Preencha todos os campos do formulário de contato...');</script>";
           }else{
                $tb = $conn->prepare("INSERT INTO contato(cont_name, cont_email, cont_mensagem) VALUES(:cont_name, :cont_email, :cont_mensagem)");
                $tb->bindParam(":cont_name", $_POST["cont_name"], PDO::PARAM_STR);
                $tb->bindParam(":cont_email", $_POST["cont_email"], PDO::PARAM_STR);
                $tb->bindParam(":cont_mensagem", $_POST["cont_mensagem"], PDO::PARAM_STR);
                $tb->execute();
                $tb = null;

                echo "<script>alert('Seu contato foi enviado... Aguarde retorno!');document.location='../index.html';</script>";
           }
      }
?>