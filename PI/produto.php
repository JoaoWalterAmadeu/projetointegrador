<?php
require('session.php');
require('conn.php');
$imagem;
if(!isset($_GET['id'])||($_GET['id']==NULL)){
    
    echo(" <meta http-equiv='refresh' content='0;url=produtos.php'>");
   
}else{
    $id = $_GET['id'];
    $querya = "SELECT * FROM `produtos` where `idproduto` =$id";
    $rs = $conn->prepare($querya);
    $rs->execute();
    $count = $rs->rowCount();
if($count==1){
   
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
    $imagem = $row->imagem;
    $valor = $row->valor;
    $descr = $row->descr;
    $nome = $row->nome;
    $nvisitas = $row->nvisitas;
}
$nvisitas++;
$stmt = $conn->prepare("UPDATE produtos SET `nvisitas`=? WHERE idproduto=?");
$stmt->bindParam(1,$nvisitas);
$stmt->bindParam(2,$id);
$stmt->execute();
    $rs = NULL;
}else{
  echo(" <meta http-equiv='refresh' content='0;url=produtos.php'>");
}
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="logica.js"></script>
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <script type="text/javascript" language="javascript" src="md5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://kit.fontawesome.com/c1ff9f4537.js" crossorigin="anonymous"></script>    
<link rel="icon" type="image/png" href="images/lowcarbo.svg" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>
        <?=utf8_encode($nome)?> - Comprar LowCarbo
    </title>
</head><body style="visibility:hidden;" id="corpo" onload="getapi();slider();">
<?php include("nav.php")?>
<div class="container">
<div class=" bg-transparent text-center" style="margin-top:1%">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

      <img src="<?=($imagem)?>" style='height: 100%; width: 100%; object-fit: contain'>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=utf8_encode($nome)?></h5>
        <p class="card-text"><?=utf8_encode($descr)?></p>
        <p class="card-text text-primary">R$<?=$valor?></p>
        <button class="btn btn-primary <?php if(!isset($_SESSION['nome']))echo('disabled');?> " onclick="ccr(<?=$id?>); return false">Adicionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>
</div> 
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>