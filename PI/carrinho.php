<?php
require('session.php');
if(!isset($_SESSION["nome"])){
    require('logout.php');
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
        Carrinho
    </title>
</head><body style="visibility:hidden;" id="corpo" onload="getapi();slider();">
<?php include("nav.php")?>
<div style="margin-top:2%">
<?php
  if(!isset($_COOKIE["items"])){
   ?>
   <div class="card text-white bg-warning mb-3 ctrl" style="max-width: 18rem;">
  <div class="card-header">Você não tem itens no carrinho</div>
  <div class="card-body">
    <h5 class="card-title">Adicione itens ao seu carrinho através da página de produtos.</h5>
    <p class="card-text"><a href="produtos.php">Clique aqui para adicionar itens ao carrinho.</a></p>
  </div>
</div>
   <?php
  }else{
$i = 0;
$itms = explode(' ', $_COOKIE['items']);
$duplicatas = array_count_values($itms);
$ooo = 0;
require("conn.php");
$mm = count($duplicatas);
$aaa = 0;
$auitm = array_values(array_unique($itms));
while($ooo<$mm){
$aaa +=$duplicatas[$auitm[$ooo]];
$ooo++;
}
$bbb = 0;
$subtotal = 0;
$kkk = count($itms);
while($bbb<(count($auitm)-1)){
    $stmt = "SELECT nome, descr, valor, imagem FROM produtos Where idproduto ='". $auitm[$bbb]."'";
    $rs = $conn->prepare($stmt);    
    $rs->execute();
    $row = $rs->fetch(PDO::FETCH_OBJ);
    if(isset($row->valor)){
    $subtotal += ($row->valor)*$duplicatas[$auitm[$bbb]];
?>
   
<div class="card mb-3 ctrl" style="max-width: 75%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=utf8_encode($row->imagem)?>" onclick="window.location='produto.php?id=<?=$auitm[$bbb]?>'" class="card-img" alt="<?=utf8_encode($row->nome)?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" onclick="window.location='produto.php?id=<?=$auitm[$bbb]?>'"><?=utf8_encode($row->nome)?></h5>
        <p class="card-text"><?=utf8_encode($row->descr)?></p>
        <h5 class="card-text">Quantidade:
        <small class="text-success font-weight-bold"><?=$duplicatas[$auitm[$bbb]]?></small></h5>
        <p class="card-text lead">Valor unitário: <small class="text-success font-weight-bold">R$<?=($row->valor)?></small></p>
        <p class="card-text lead">Subtotal: <small class="text-success font-weight-bold">R$<?=($row->valor)*$duplicatas[$auitm[$bbb]]?></small></p>
      </div>
    </div>
  </div>
</div><?php
}
$bbb++;
}
?>
<div class="card ctrl text-center" style="max-width: 65%;">
  <div class="card-body">
    <h5 class="card-title">Total</h5>
    <p class="card-text text-info lead">R$<?=$subtotal?></p>
    <a href="#" class="btn btn-primary fwd">Finalizar</a>
  </div>
</div>
<?php
 }
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>