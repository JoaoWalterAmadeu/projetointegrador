<?php
require("session.php");
$conn = new PDO(
    "mysql:host=fdb28.awardspace.net;dbname=3549283_pi", "3549283_pi", "wgHUgSP3p3D4h3B"
);
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
	$_SESSION['nome'] = $row->nome;
	echo(" <meta http-equiv='refresh' content='0;url=bemvindo.php'>");
}}else{
	echo(" <meta http-equiv='refresh' content='0;url=index.html?err'>");
}}}
if(array_key_exists(('reg'),$_POST)){
	$email = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	$rs = $conn->query("SELECT * FROM `user` WHERE `nome`='$email' ");
	$count = $rs->rowCount();
if($count==1){
	$aaaa = $conn->query("SELECT * FROM `user` WHERE `nome`='$email' and `senha`='$senha' ");
	$aaac = $aaaa->rowCount();
	if($aaaa==1){
		$_SESSION['nome']=$email;
		$_SESSION['id']= $row->id;
		echo(" <meta http-equiv='refresh' content='0;url=bemvindo.php'>");
	}else{
	echo(" <meta http-equiv='refresh' content='0;url=registro.html?err'>");
	}
}else{
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$stmt = $conn->prepare("INSERT INTO user(nome, senha, sexo, idade, peso, altura) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$senha);
	$stmt->bindParam(3,$sexo);
	$stmt->bindParam(4,$idade);
	$stmt->bindParam(5,$peso);
	$stmt->bindParam(6,$altura);
	$stmt->execute();
	$aaaa = $conn->query("SELECT * FROM `user` WHERE `nome`='$email'");
	$_SESSION['id'] = $row->id;
	$_SESSION['nome'] = $email;
	echo(" <meta http-equiv='refresh' content='0;url=bemvindo.php'>");
}
}
?>