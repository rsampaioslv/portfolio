<?php
	 $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u814282674_portf', 'u814282674_root', 'lurds1');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //Recebe via GET a palara digitada a ser buscada nos registros
	 $palavra = $_GET["palavra"];
     $consulta = $pdo->query("SELECT * FROM contato WHERE cont_name LIKE '%".$palavra."%'");
?>
<!DOCTYPE HTML>
 <html lang = "pt-br">
	 <head>
		 <meta charset = "utf-8">
		 <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		 <meta name = "viewport" content = "width = device-width, initial-scale=1">
		 <title>BUSCA</title>
		 <link href = "css/bootstrap.min.css" rel = "stylesheet">
		 <link href = "css/style.css" rel = "stylesheet">
	 </head>
	 <body>
		 <script src = "js/jquery.min.js"></script>
		 <script src = "js/bootstrap.min.js"></script>
	 </body>
	 <!-- NAVBAR -->
	 <nav class = "navbar navbar-inverse navbar-fixed-top">
		 <div class = "container-fluid">
			 <div class = "navbar-header">
				 <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapsed" data-target = "#navbar" aria-expanded = "false" aria-controls = "navbar">
					 <span class = "sr-only">Toggle Navigation</span>
					 <span class = "icon-bar"></span>
					 <span class = "icon-bar"></span>
					 <span class = "icon-bar"></span>
				 </button>
				 <a class = "navbar-brand">Visualização de Comentários</a>
			 </div>
		 </div>
	 </nav>
	 <!-- END NAVBAR -->
	
	 <div id = "main" class = "container-fluid">
		 <h3 class = "page-header">Visualizar Registro</h3>
		 <?php
		 	 if($consulta){
		 	 	 while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
		 ?>
		 <div class = "row">
			 <div class = "col-md-3">
				 <p><strong>Nome</strong></p>
				 <p><?= $linha['cont_name'] ?></p>
			 </div>
			 <div class = "col-md-3">
				 <p><strong>E-mail</strong></p>
				 <p><?= $linha['cont_email'] ?></p>
			 </div>
			 <div class = "col-md-3">
				 <p><strong>Comentário</strong></p>
				 <p><?= $linha['cont_mensagem'] ?></p>
			 </div>
		 </div>
		 <?php
				 }
			 }else{
			 	 //Caso não haja nenhuma palavra registrada, retorna a mensagem de erro
				 echo "Ops... Não foi encontrado resultado algum. Tente novamente.";
			 }
		 ?>
		 <hr/>
		 <div id = "actions" class = "row">
			 <div class = "col-md-12">
				 <a href = "logado.php" class = "btn btn-default">Voltar</a>
			 </div>
		 </div>
	 </div>
</html>