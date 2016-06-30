<?php
     $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u814282674_portf', 'u814282674_root', 'lurds1');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	 $cont_name = $_GET['cont_name'];
	 $query = $pdo->query("DELETE FROM contato WHERE cont_name ='".$cont_name."'");

	 if($query){
		 echo "<script>
			   	 var confirma = confirm('Comentário deletado com sucesso!');
			  	 if(confirma){
			  		 location.href='logado.php';
			  	 }
			 </script>";
	 }else{
		 echo "Ops... Deu algo errado. Tente novamente.";
	}
?>