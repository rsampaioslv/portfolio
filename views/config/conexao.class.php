<?php
	 class Conexao{
	 	 private $db_host = 'mysql.hostinger.com.br';
	 	 private $db_user = 'u814282674_root';
	 	 private $db_pass = 'lurds1';
	 	 private $db_name = 'u814282674_portf';

	 	 private $con = false;

	 	 public function connect(){
	 	 	 //Função que estabelece a conexão com o banco
	 	 	 if(!$this->con){
	 	 	 	 $myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
	 	 	 	 if($myconn){
	 	 	 	 	 $seldb = @mysql_select_db($this->db_name, $myconn);
	 	 	 	 	 if($seldb){
	 	 	 	 	 	 $this->con = true;
	 	 	 	 	 	 return true;
	 	 	 	 	 }else{
	 	 	 	 	 	 return false;
	 	 	 	 	 }
	 	 	 	 }else{
	 	 	 	 	 return false;
	 	 	 	 }
	 	 	 }else{
	 	 	 	 return true;
	 	 	 }
	 	 }

	 	 public function disconnect(){
	 	 	 //Função que fecha a conexão com o banco
	 	 	 if($this->con){
	 	 	 	 if(@mysql_close()){
	 	 	 	 	 $this->con = false;
	 	 	 	 	 return true;
	 	 	 	 }else{
	 	 	 	 	 return false;
	 	 	 	 }
	 	 	 }
	 	 }
	 }
?>