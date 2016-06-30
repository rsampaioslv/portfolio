<?php
     $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u814282674_portf', 'u814282674_root', 'lurds1');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $consulta = $pdo->query("SELECT * FROM experiencia;");
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
         <meta charset = "utf-8">
         <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
         <meta name = "viewport" content = "width=device-width, initial-scale=1">
         <title>EXPERIÊNCIA PROFISSIONAL</title>
         <!-- Google Font -->
         <link href = 'http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel = 'stylesheet' type = 'text/css'>
         <link href = 'http://fonts.googleapis.com/css?family=Montserrat:400,700' rel = 'stylesheet' type = 'text/css'>
         <!-- Font Awesome -->
         <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <!-- Preloader -->
         <link rel = "stylesheet" href = "../../css/preloader.css" type = "text/css" media = "screen, print"/>
         <!-- Icon Font-->
         <link rel = "stylesheet" href = "../../style.css">
         <link rel = "stylesheet" href = "../../css/owl.carousel.css">
         <link rel = "stylesheet" href = "../../css/owl.theme.default.css">
         <!-- Animate CSS-->
         <link rel = "stylesheet" href = "../../css/animate.css">
         <!-- Bootstrap -->
         <link href = "../../css/bootstrap.min.css" rel = "stylesheet">
         <!-- Style -->
         <link href = "../../css/style.css" rel = "stylesheet">
         <!-- Responsive CSS -->
         <link href = "../../css/responsive.css" rel = "stylesheet">
     </head>
     <body>
         <!-- Preloader -->
         <div id="preloader">
             <div id="status">&nbsp;</div>
         </div>
         <!-- SECTION HOME -->
         <header id = "HOME" style = "background-position: 50% -125px;">
	         <div class = "section_overlay">
	             <nav class = "navbar navbar-default navbar-fixed-top">
	                 <div class = "container">
	                    <div class = "navbar-header">
                             <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1">
	                             <span class = "sr-only">Toggle navigation</span>
	                             <span class = "icon-bar"></span>
	                             <span class = "icon-bar"></span>
	                             <span class="icon-bar"></span>
	                         </button>
	                         <a class = "navbar-brand" href = "#"><img src = "../../images/logo.png" alt = ""></a>
	                     </div>
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                         <ul class="nav navbar-nav navbar-right">
                                 <li><a href = "../../index.html">Voltar</a></li>
	                         </ul>
	                     </div>
	                 </div>
	             </nav> 
                 <div class = "container">
	                 <div class = "row">
	                     <div class = "col-md-12 text-center">
	                         <div class = "home_text wow fadeInUp animated">
	                             <h2>Raabe Sampaio</h2>
	                             <p>Portfólio pessoal e profissional</p>
                                 <img src = "../../images/shape.png" alt = "">                        
	                         </div>
	                     </div>
	                 </div>
	             </div>
	             <div class = "container">
	                 <div class = "row">
	                     <div class = "col-md-12 text-center">
	                         <div class = "scroll_down">
                                 <a href = "#WORK"><img src = "../../images/scroll.png" alt = ""></a>
	                             <h4>Scroll Down</h4>
	                         </div>
	                     </div>
	                 </div>
	             </div>            
	         </div>  
	     </section>         
     </header>
     <!-- END HEADER -->

     <!-- SECTION WORK -->
     <section class = "work_area" id = "WORK">
         <div class = "container">
             <div class = "row">
                 <div class = "col-md-12 text-center">
                     <div class = "work_title  wow fadeInUp animated">
                         <h1>Experiência Profissional</h1>
                         <img src = "../../images/shape.png" alt = "">
                     </div>
                 </div>
             </div>
         </div>
         <div class = "container-fluid">
             <div class = "row pad_top">
                 <div class = "table-responsive col-md-12">
                     <table class = "table table-striped" cellspacing = "0" cellpading = "0">
                         <thead>
                             <tr>
                                 <td><h3>Nome da empresa:</h3></td>
                                 <td><h3>Função exercida:</h3></td>
                                 <td><h3>Descrição das rotinas:</h3></td>
                                 <td><h3>Início:</h3></td>
                                 <td><h3>Término:</h3></td>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                 while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                             ?>
                             <tr>
                                 <td><?= $linha['expe_empr'] ?></td>
                                 <td><?= $linha['expe_func'] ?></td>
                                 <td><?= $linha['expe_roti'] ?></td>
                                 <td><?= $linha['expe_mes_inic'] ?>/<?= $linha['expe_ano_inic'] ?></td>
                                 <td><?= $linha['expe_mes_fim'] ?>/<?= $linha['expe_ano_fim'] ?></td>
                             </tr>
                         </tbody>
                             <?php
                                 }
                             ?>
                     </table>
                 </div>
             </div>           
         </div>
     </section>
     <!-- END SECTION WORK -->
     <br><br><br><br>
     <!-- FOOTER -->
     <footer>
         <div class = "container">
             <div class = "container">
                 <div class = "row">
                     <div class = "col-md-12 text-center">
                         <div class = "footer_logo   wow fadeInUp animated">
                             <img src = "../../images/logo.png" alt = "">
                         </div>
                     </div>
                 </div>
             </div>
             <div class = "container">
                 <div class = "row">
                     <div class = "col-md-12 text-center   wow fadeInUp animated">
                         <div class = "social">
                             <h2>Siga-me nas redes sociais</h2>
                             <ul class = "icon_list">
                                 <li></li>
                                 <li><a href = ""><i class = "fa fa-facebook"></i></a></li>
                                 <li><a href = ""><i class = "fa fa-linkedin"></i></a></li>
                                 <li></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class = "container">
                 <div class = "row">
                     <div class = "col-md-12 text-center">
                         <div class = "copyright_text   wow fadeInUp animated">
                             <p>&copy; brandy 2015. All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team</a></p>
                             <p>Made with love for creative people.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- END FOOTER -->
    <!-- =========================
                SCRIPTS 
    ============================== -->
     <script src = "../../js/jquery.min.js"></script>
     <script src = "../../js/bootstrap.min.js"></script>
     <script src = "../../js/jquery.nicescroll.js"></script>
     <script src = "../../js/owl.carousel.js"></script>
     <script src = "../../js/wow.js"></script>
     <script src = "../../js/script.js"></script>
     </body>
</html>