<!DOCTYPE html>
<html lang = "pt-br">
	 <head>
		 <meta charset = "utf-8">
		 <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		 <title>W E L C O M E</title>
		 <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		 <link href = "css/bootstrap.min.css" rel = "stylesheet">
		 <link href = "css/style.css" rel = "stylesheet">
		 <link rel = 'stylesheet' href = 'css/stylebox.css' type = 'text/css'>
		 <?php
       // A sessão precisa ser iniciada em cada página diferente
       if (!isset($_SESSION)) session_start();
       // Verifica se não há a variável da sessão que identifica o usuário
       if (!isset($_SESSION["USER"])) {
         // Destrói a sessão por segurança
         session_destroy();
         // Retorna uma mensagem de erro e pede para que o visitante volte para a página inicial
         echo "<div class=container>
                <div class=row>
                  <h2 class=text-center>Ops... Algo deu errado.</h2>
                  <div class=row>
                    <div class=col-md-4 text-center></div>
                    <div class=col-md-4 text-center>
                      <div class=box>
                        <div class=box-content>
                          <h1 class=tag-title>Área Restrita</h1>
                          <hr />
                          <p>Você está tentando acessar uma área restrita<br>
                          e não encontramos permissão dada para isso.<br>
                          Tente contatar o administrador do site.</p>
                          <br />
                          <a href = ../index.html class=btn btn-block btn-primary>Voltar</a>
                        </div>
                      </div>
                    </div>
                    <div class=col-md-4 text-center></div>
                  </div>           
                </div>
              </div>";
         exit;
      }
    ?>
	 </head>
	 <body>
		 <script src = "js/jquery.js"></script>
		 <script src = "js/bootstrap.min.js"></script>
		 <div class = "container">
			 <div id = "slideshow" class = "carousel slide" data-ride = "carousel">
				 <div class = "carousel-inner" role = "listbox">
					 <div class = "item active">
					 	 <img src = "../images/bootstrap.jpg" class = "img-responsive"/>
					 </div>
					 <div class = "item">
						 <img src = "../images/mysql1.jpg" class = "img-responsive"/>
					 </div>
					 <div class = "item">
						 <img src = "../images/php_evolution1.jpg" class = "img-responsive"/>
					 </div>
				 </div>
				 <a class = "left carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "prev">
					 <span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
					 <span class = "sr-only">Anterior</span>
				 </a>
				 <a class = "right carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "next">
					 <span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
					 <span class = "sr-only">Próximo</span>
				 </a>
			 </div>
			 <div id = "widgets" class = "row">
				 <div id = "widget-texto1" class = "col-md-4">
					 <h2></h2>
					 <p></p>
				 </div>
				 <div id = "widget-texto1" class = "col-md-4">
					 <h2><font face = "Tahoma">Visualização</h2>
					 <p>Visualize aqui os comentários registrados no banco.<br>
						 <font size = "1">Obs: Comentários realizados pelo facebook não estão cadastrados.</small></p>
					 <p><a class = "btn btn-default" role = "button" href = "logado.php">View</a></p>
				 </div>
				 <div id = "widget-texto1" class = "col-md-4">
					 <h2></h2>
					 <p></p>
				 </div>
			 </div>
			 <hr/>
			 <footer>
				 <p class = "text-muted">&copy; 2016</p>
			 </footer>
		 </div>
	 </body>
</html>