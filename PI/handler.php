<?php
require("session.php");
$conn = new PDO(
    "mysql:host=localhost;dbname=pi", "root", "vertrigo"
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
	header('Location: bemvindo.php'); 
}}else{
	echo("Usuário não encontrado");
}
	
	
}
}
if(array_key_exists(('reg'),$_POST)){
	$email = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	$rs = $conn->query("SELECT * FROM `user` WHERE `nome`='$email' ");
$count = $rs->rowCount();
if($count==1){
	header('Location: registro.html?err'); 

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
	$_SESSION['id'] = $row->id;
	$_SESSION['nome'] = $row->nome;
	header('Location: bemvindo.php'); 
}
}
?>