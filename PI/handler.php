<?php
require("session.php");
require("conn.php");
if(array_key_exists(('log'),$_POST)){
	$email = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	if(($email!=null) or ($senha!=null)){
$rs = $conn->query("SELECT * FROM `user` WHERE `nome`='$email' and `senha`='$senha' ");
$count = $rs->rowCount();
if($count==1){
while($row = $rs->fetch(PDO::FETCH_OBJ)){
	$_SESSION['id'] = $row->id;
	$_SESSION['nome'] = $email;
	$_SESSION['peso'] = $row->peso;
	$_SESSION['idade'] = $row->idade;
	$_SESSION['altura'] = $row->altura;
	$_SESSION['sexo'] = $row->sexo;
	$_SESSION['email'] = $row->email;
	$_SESSION['senha'] = md5($row->senha);
	$_SESSION['pe'] =0;
	$_SESSION['objetivo']=1;
	echo(" <meta http-equiv='refresh' content='0;url=index.php'>");
}}else{
	echo(" <meta http-equiv='refresh' content='0;url=index.php?err'>");
}}

}


if(array_key_exists(('reg'),$_POST)){
	$email = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	$rs = $conn->query("SELECT * FROM `user` WHERE `nome`='$email' ");
	$count = $rs->rowCount();
	$rs = null;
if($count==1){
	echo(" <meta http-equiv='refresh' content='0;url=index.php?uar'>");
	}
else{
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$reee = $_POST['email'];
	$stmt = $conn->prepare("INSERT INTO user(nome, senha, sexo , idade, peso, altura,email) VALUES(?, ?, ?, ?, ?, ?,?)");
	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$senha);
	$stmt->bindParam(3,$sexo);
	$stmt->bindParam(4,$idade);
	$stmt->bindParam(5,$peso);
	$stmt->bindParam(6,$altura);
	$stmt->bindParam(7,$reee);
	$stmt->execute();
	$stmt = null;
	$aaaa = $conn->query("SELECT FROM `user` WHERE `nome`='$email' and `senha`='$senha'");
	$_SESSION['id'] = $aaaa->id;
	$_SESSION['nome'] = $email;
	$_SESSION['peso'] = $aaaa->peso;
	$_SESSION['idade'] = $aaaa->idade;
	$_SESSION['altura'] = $aaaa->altura;
	$_SESSION['sexo'] = $aaaa->sexo;
	$_SESSION['senha'] = md5($aaaa->senha);
	$_SESSION['email'] = $aaaa->email;
	$_SESSION['pe'] =0;
	$_SESSION['objetivo']=1;
	echo(" <meta http-equiv='refresh' content='0;url=index.php'>");
}
}
?>