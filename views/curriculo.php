<?php
	 ob_start();
?>
<!DOCTYPE html>
 <html lang = "pt-br">
     <head>
         <meta http-equiv = "content-type" content = "text/html;"/>
         <meta charset = "utf8">
         <title>CURRÍCULO</title>
         <link rel = 'icon' type = 'image/png' href = 'favicon.png'>
         <link rel = 'stylesheet' href = 'css/bootstrap.min.css' type = 'text/css'>
         <link rel = 'stylesheet' href = 'css/style.css' type = 'text/css'>
         <style type = "text/css">
             h2{text-align: center;
                 font-family: "Tahoma";
             }
             h4{background-color: #EEE9E9;}
             body{
                 background-image: URL(../ft.jpg);
                 background-repeat: no-repeat;
                 background-position: 100px 0px;
             }
         </style>
         <!-- NAVBAR -->
         <nav class = "navbar navbar-inverse navbar-fixed-bottom">
             <div class = "container-fluid">
                 <div class = "navbar-header">
                     <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar" aria-expanded = "false" aria-controls = "navbar">
                         <span class = "sr-only">Toggle Navigation</span>
                         <span class = "icon-bar"></span>
                         <span class = "icon-bar"></span>
                         <span class = "icon-bar"></span>
                     </button>
                     <a class = "navbar-brand">Currículo para Download</a>
                 </div>
                 <div id = "navbar" class = "navbar-collapse collapse">
                     <ul class = "nav navbar-nav navbar-right">
                         <li><a href = "gerador.php">Download</a></li>
                         <li><a href = "../index.html">Voltar</a></li>
                         <li><a href = ""></a></li>
                     </ul>
                 </div>
             </div>
         </nav>
         <!-- END NAVBAR -->
     </head>

     <body>
         <h2>RAABE SAMPAIO SILVA</h2>
         <hr>
         <font face = "Tahoma"><p align = "center">Rua XXXXX, XXX<br>
         Guarulhos - SP - XXXXXXXX<br>
         raabe.13@hotmail.com<br>
         (11)XXXXX-XXXX</font></p>
         <p align = "center"><font face = "Tahoma"> Formação técnica completa, cursando 3º semestre (período noturno), boa comunicação, fácil aprendizado, espírito de equipe e responsabilidade.</font></p>
         <hr>
         <h4><font face = "Tahoma">FORMAÇÃO ACADÊMICA</font></h4>
         <ul>
             <li align = "justify"><font face = "Tahoma">Cursando 3º semestre do curso de Análise e Desenvolvimento de
                 Sistemas, na instituição IFSP - Instituto Federal de Ciência, Educação e Tecnologia, campus Guarulhos;</li>
             <li align = "justify">Curso Técnico em Contabilidade concluído na instituição Senac Guarulhos (2013-2014);</li>
             <li align = "justify">Cursos Complementares:
                 <ul>
                     <li>Java Básico - Prime Cursos - 2016</li>
                     <li>Inglês - PBF Cursos - 2015-2016</li>
                     <li>Matemática Financeira com HP12C - Prime Cursos - 2013</li>
                     <li>Montagem e manutenção de computadores - FOX Informática - 2010</li>
                     <li>Windows XP e Digitação - FOX Informática - 2008-2009</li>
                 </ul>
             </li>
         </ul>
         <hr>
         <h4><font face = "Tahoma">EXPERIÊNCIA PROFISSIONAL</font></h4>
         <ul>
             <li align = "justify"><b>PERÍODO:</b> 07/2014 a 05/2015</li>
             <li align = "justify"><b>EMPRESA:</b> Aché Laboratórios Farmacêuticos S.A </li>
             <li align = "justify"><b>CARGO:</b> Aprendiz Administrativo</li>
             <li align = "justify"><b>DESCRIÇÃO DAS ATIVIDADES:</b> Atividades de apoio nas áreas Contábil/Fiscal e RH -
                 Administração de Pessoal. Atividades: Emissão/Elaboração/Conferência de notas fiscais, rateio de despesas
                 e custos, conciliação de contas, conferência de impostos. Admissão de colaboradores, atualização de 
                 informações, registro e alteração em CTPS, ponto eletrônico, abono de faltas, emissão de crachás, noções
                 de demissão e homologação de colaboradores. </li>
         </ul>
         <hr>
         <h4><font face = "Tahoma">ATIVIDADES COMPLEMENTARES</font></h4>
         <ul>
             <li>Projeto Casa Inteligente - Arduíno, 2015 a 2016;</li>
             <li>Abertura de empresa fictícia, no curso Técnico em Contabilidade, com suficiência Ótima, 2013 a 2014.</li>
         </ul>
         <hr>
         <br><br>
     </body>
</html>
<?php
     //Capta os dados em HTML para fazer o pdf
     $buffer = ob_get_contents(); //Captura e guarda os dados do buffer interno
     $filename =  "code.html"; // Em HTML, nome do arquivo a ser gerado
     file_put_contents($filename, $buffer); // Mistura - grava os dados do buffer no arquivo html
?>