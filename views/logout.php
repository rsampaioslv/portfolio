<?php
	 //Abre a sessão
	 session_start(); 
	 //Destroi completamente a sessão e limpa todos os valores salvos
	 session_destroy();
	 //Volta o administrador para a página inicial
	 header("Location: ../index.html");
	 exit;
?>