<?php
	 class Crud{
	 	 private $sql_ins = "";
	 	 private $sql_sel = "";
	 	 private $tabela  = "";

	 	 /** 
	 	 * Método construct
	 	 * @method __construct
	 	 * @param string $tabela
	 	 * @return $this -> tabela
	 	 */
	 	 public function __construct($tabela){
	 	 	 //Construtor, nome da tabela como parâmetro
	 	 	 $this->tabela = $tabela;
	 	 	 return $this->tabela;
	 	 }

	 	 /** 
	 	 * Método inserir
	 	 * @method inserir
	 	 * @param string $campos
	 	 * @param string $valores
	 	 * @example: $campos = "codigo, nome, email" e $valores = "1, 'Zé Silva', 'ze@ze.net'"
	 	 * @return void
	 	 */
	 	 public function inserir($campos, $valores){
	 	 	 //Função de inserção, campos e seus respectivos valores como parâmetros
	 	 	 $this->sql_ins = "INSERT INTO " . $this->tabela . " ($campos) VALUES ($valores)";
	 	 	 if(!$this->ins = mysql_query($this->sql_ins)){
	 	 	 	 die("<center>Erro na inclusão: ".'<br>Linha:'.__LINE__."<br>".mysql_error()."<br><a href = '../index.html'>Voltar ao Menu</a></center>");
	 	 	 }else{
	 	 	 	 print"<script>location='../index.html';</script>";
	 	 	 }
	 	 }

	 	 public function atualizar($camposvalores, $where = NULL){
	 	 	 //Função de edição, campos com seus valores e o campo id que define a linha a ser editada como parâmetros
	 	 	 if($where){
	 	 	 	 $this->sql_upd = "UPDATE " . $this->tabela . " SET $camposvalores WHERE $where";
	 	 	 }else{
	 	 	 	 $this->sql_upd = "UPDATE " . $this->tabela . " SET $camposvalores";
	 	 	 }

	 	 	 if(!$this->upd = mysql_query($this->sql_upd)){
	 	 	 	 die("<center>Erro na atualização: "."<br>Linha:".__LINE__."<br>".mysql_error()."<br><a href = '../index.html'>Voltar ao menu</a></center>");
	 	 	 }else{
	 	 	 	 print"<center>Registro atualizado com sucesso!<br><a href = '../index.html'>Voltar ao menu</a></center>";
	 	 	 }
	 	 }

	 	 public function visualizar($camposvalores, $where = NULL){
	 	 	if($where){
	 	 		$this->sql_sel = "SELECT" . $this->tabela . " SET $camposvalores WHERE $where";
	 	 	}else{
	 	 		$this->sql_sel = "SELECT " . $this->tabela . " SET $camposvalores WHERE $where";
	 	 	}

	 	 	if(!$this->sel = mysql_query($this->sql_sel)){
	 	 		die("<center>Erro na busca: "."<br>Linha:".__LINE__."<br>".mysql_error()."<br><a href = '../index.html'>Voltar ao menu</a></center>");
	 	 	}else{
	 	 		print"<center>Registro buscado com sucesso!";
	 	 	}
	 	 }

	 	 /** 
	 	 * Método excluir
	 	 * @method excluir
	 	 * @param string $where
	 	 * @example: $where = "codigo = 2 AND nome = 'Jose'"
	 	 * @return void
	 	 */
	 	 public function excluir($where = NULL){
	 	 	 //Função de exclusão, campo que define a linha a ser editada como parâmetro
	 	 	 if($where){
	 	 	 	 $this->sql_sel = "SELECT * FROM " . $this->tabela . " WHERE $where";
	 	 	 	 $this->sql_del = "DELETE FROM " . $this->tabela . " WHERE $where";
	 	 	 }else{
	 	 	 	 $this->sql_sel = "SELECT * FROM " . $this->tabela;
	 	 	 	 $this->sql_del = "DELETE FROM " . $this->tabela;
	 	 	 }
	 	 	 $sel  = mysql_query($this->sql_sel);
	 	 	 $regs = mysql_num_rows($sel);

	 	 	 if($regs > 0){
	 	 	 	 if(!$this->del = mysql_query($this->sql_del)){
	 	 	 	 	 die("<center>Erro na exclusão".'<br>Linha: '.__LINE__."<br>".mysql_error()."<br><a href = '../index.html'>Voltar ao menu</a></center>");
	 	 	 	 }else{
	 	 	 	 	 print"<center>Registro excluído com sucesso.<br><a href = '../index.html'>Voltar ao menu</a></center>";
	 	 	 	 }
	 	 	 }else{
	 	 	 	print"<center>Registro não encontrado!<br><a href = '../index.html'>Voltar ao menu</a></center>";
	 	 	 }
	 	 }
	 }
?>