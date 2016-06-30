<?php
     session_start();
     require_once("config/config.php");

     if(isset($_REQUEST["submit"])){
         $tb = $conn->prepare("SELECT * FROM login WHERE logi_user = :logi_user AND logi_pass = :logi_pass");
         $tb->bindParam(":logi_user", $_POST["logi_user"], PDO::PARAM_STR);
         $tb->bindParam(":logi_pass", $_POST["logi_pass"], PDO::PARAM_STR);
         $tb->execute();
         $l = $tb->fetch(PDO::FETCH_ASSOC);
         $tb = null;
         if(!empty($l)){
             $_SESSION["USER"] = $l["logi_user"];
             header("Location: restrito.php");
         }else{
             echo "<script>alert('Login inválido... Tente novamente.');</script>";
         }
     }
?>
