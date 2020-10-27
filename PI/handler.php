<?php
error_reporting(0);
require("session.php");
require("conn.php");
if(array_key_exists(('updt'),$_POST)){
	
	$rs = $conn->query("SELECT * FROM `user` WHERE `nome`='".$_SESSION['nome']."'");
	$row = $rs->fetch(PDO::FETCH_OBJ);
	$senha = $row->senha;
	$idade=$row->idade;
	$peso =$row->peso;
	$altura = $row->altura;
	$obj = $row->obj;
	if(isset($_POST['idadei'])&&($_POST['idadei']!=$idade)){
		$idade=$_POST['idadei'];
	}
	if(isset($_POST['obj'])&&($_POST['obj']!=$obj)){
		$obj=$_POST['obj'];
	}
	if(!empty($_POST['pe'])){
		$pe=1;
	}else{
		$pe=0;
	}
	if(isset($_POST['email'])&&($_POST['email']!="")){
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$email = $_SESSION['email'];
}
	if(isset($_POST['pw'])&&($_POST['pw']!="")){
		$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
		$senha = md5($senha);
	}
	if(isset($_POST['pesoi'])){
		$peso = $_POST['pesoi'];
}
	if(isset($_POST['alturai'])){
	$altura = $_POST['alturai'];
}
$row = null;

	if($_SESSION['email']!=$_POST['email']){
$rs = $conn->query("SELECT * FROM `user` WHERE `email`='".$_POST['email']."'");
$count = $rs->rowCount();
}
if($count>=1){
	echo(" <meta http-equiv='refresh' content='0;url=perfil.php?uar'>");
}else{
	$stmt = $conn->prepare("UPDATE user SET `email`=?, `senha`=?, `peso`=?, `altura`=?, `pe` = ?, `idade` = ?, `obj` = ? WHERE id=?");
	
	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$senha);
	$stmt->bindParam(3,$peso);
	$stmt->bindParam(4,$altura);
	$stmt->bindParam(5,$pe);
	$stmt->bindParam(6,$idade);
	$stmt->bindParam(7,$obj);
	$stmt->bindParam(8,$_SESSION['id']);
	$stmt->execute();
	echo(" <meta http-equiv='refresh' content='0;url=logout.php'>");
}
}

if(array_key_exists(('log'),$_POST)){
	$email = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
	utf8_encode($email);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	if(($email!=null) or ($senha!=null)){
$rs = $conn->query("SELECT * FROM `user` WHERE `email`='$email' and `senha`='$senha' ");
$count = $rs->rowCount();
if($count==1){
while($row = $rs->fetch(PDO::FETCH_OBJ)){
	$_SESSION['id'] = $row->id;
	$_SESSION['nome'] = $row->nome;
	//$_SESSION['carrinho'] = $row->carrinho;
	//$_SESSION['items_carrinho'] = $row->items_carrinho;
	$_SESSION['peso'] = $row->peso;
	$_SESSION['idade'] = $row->idade;
	$_SESSION['altura'] = $row->altura;
	$_SESSION['sexo'] = $row->sexo;
	$_SESSION['email'] = $row->email;
	$_SESSION['senha'] = md5($row->senha);
	$_SESSION['pe'] = $row->pe;
	$_SESSION['objetivo'] = $row->obj;
	$domain =".". $_SERVER['HTTP_HOST'];
	 setcookie('senha', md5($row->senha));
//	 setcookie('carrinho', $row->carrinho);
	 setcookie('items', $row->items_carrinho);

	 echo(" <meta http-equiv='refresh' content='0;url=index.php'>");

}}else{
	echo(" <meta http-equiv='refresh' content='0;url=login.php?err'>");
}}

}


if(array_key_exists(('reg'),$_POST)){
	

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
	utf8_encode($email);
	$senha = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = md5($senha);
	$rs = $conn->query("SELECT * FROM `user` WHERE `email`='$email' ");
	$count = $rs->rowCount();
	$rs = null;
if($count==1){
	echo(" <meta http-equiv='refresh' content='0;url=registro.php?uar'>");
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
	echo(" <meta http-equiv='refresh' content='0;url=login.php'>");
}
}
?>