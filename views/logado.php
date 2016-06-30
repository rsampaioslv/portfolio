<?php
   $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u814282674_portf', 'u814282674_root', 'lurds1');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $consulta = $pdo->query("SELECT * FROM contato;");
?>
<!DOCTYPE html>
<html lang = "pt-br">
   <head>
     <meta http-equiv = "content-type" content = "text/html;"/>
     <meta charset = "utf8">
     <title>ÁREA 151</title>
     <link rel = 'icon' type = 'image/png' href = 'favicon.png'>
     <link rel = 'stylesheet' href = 'css/bootstrap.min.css' type = 'text/css'>
     <link rel = 'stylesheet' href = 'css/style.css' type = 'text/css'>
     <link rel = 'stylesheet' href = 'css/stylebox.css' type = 'text/css'>
     <script>
     //Função que é acionada quando o admin clica em excluir algum comentário realizado
       function excluir_registro(){
         if(!confirm('Deseja realmente excluir este registro?')){
           if(window.event){
             window.event.returnValue = true;
           }else{
             e.preventDefault();
           }
         }
       }
     </script>
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
     <!-- NAVBAR -->
     <nav class = "navbar navbar-inverse navbar-fixed-top">
       <div class = "container-fluid">
         <div class = "navbar-header">
           <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar" aria-expanded = "false" aria-controls = "navbar">
             <span class = "sr-only">Toggle Navigation</span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
           </button>
           <a class = "navbar-brand">Restrito</a>
         </div>
         <div id = "navbar" class = "navbar-collapse collapse">
           <ul class = "nav navbar-nav navbar-right">
             <li><a href = ""></a></li>
             <li><a href = ""></a></li>
           </ul>
         </div>
       </div>
     </nav>
     <!-- END NAVBAR -->
   </head>
   <body>
     <div id = "main" class = "container-fluid">
       <div id = "top" class = "row">
         <div class = "col-md-2">
           <h3>Comentários</h3>
         </div>
         <div class = "col-md-6">
           <form name = "busca" method = "get" action = "form_buscar.php">
             <div class = "input-group h2">
               <input class = "form-control" placeholder = "Pesquisa..." type = "text" name = "palavra">
               <span class = "input-group-btn">
                 <form name = "busca" method = "post" action = "form_buscar.php">
                   <button class = "btn btn-primary" type = "submit" value = "Buscar">
                     <span class = "glyphicon glyphicon-search"></span>
                   </button>
                 </form>
               </span>
             </div>
           </form>
         </div>
         <div class = "col-md-2">
           <div class="row">
             <div class="span4">
               <blockquote>
                 <p><font face = "Tahoma">Olá, <?php echo $_SESSION['USER']; ?></p>
                 <small><cite title="Source Title">Guarulhos, São Paulo <i class="icon-map-marker"></i></cite></small>
               </blockquote>
             </div>
           </div>
         </div>
         <div class = "col-md-2">
           <p><font face = "Tahoma" size = "1">
             <i class="icon-envelope"></i> raabe.13@hotmail.com <br>
             <i class="icon-globe"></i> www.portfoliop.esy.es <br>
             <i class="icon-gift"></i> Janeiro 28, 1996
           </font></p>
         </div>
       </div>
     </div>
     <div id = "list" class = "row">
       <div class = "table-responsive col-md-12">
         <table class = "table table-striped" cellspacing = "0" cellpading = "0">
           <thead>
             <tr>
               <th>Nome</th>
               <th>E-mail</th>
               <th>Comentário</th>
               <th>Ações</th>
             </tr>
           </thead>
           <tbody>
             <?php
               while($campo = $consulta->fetch(PDO::FETCH_ASSOC)){
             ?>
             <tr>
               <td><?php echo $campo['cont_name']; ?></td>
               <td><?php echo $campo['cont_email']; ?></td>
               <td><?php echo $campo['cont_mensagem']; ?></td>
               <td class = "actions">
                 <a class = "btn btn-danger btn-xs" href = "#" onclick = "javascript:if(confirm('Você realmente deseja excluir este registro?'))location.href = 'excluir.php?cont_name=<?php echo $campo['cont_name']; ?>'">Excluir</a>
               </td>
             </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
     <div id = "footer" class = "row">
       <div class = "col-md-12">
         <a class = "btn btn-primary" href = "logout.php">Sair</a>
         <a class = "btn btn-default" href = "restrito.php">Voltar</a>
       </div>
     </div>
   </div>    
</html>
