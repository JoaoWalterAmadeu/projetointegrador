<?php
require('session.php');
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
        Produtos
    </title>
</head><body style="visibility:hidden;" id="corpo" onload="getapi();slider();">
<?php include("nav.php")?>
<div class="container">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-primary" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-primary"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-primary"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-primary"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4" class="bg-primary"></li>
  </ol>
  <div class="carousel-inner">
<?php
$i = 0;
require("conn.php");
$rs = $conn->query("SELECT idproduto, nome, descr, valor,imagem FROM produtos ORDER BY nvisitas DESC LIMIT 5");
while($row = $rs->fetch(PDO::FETCH_OBJ)){
 echo('<div class="carousel-item"><a href="produto.php?id='.$row->idproduto.'">');
  echo('<img class="d-block w-100 " src="'.$row->imagem.'" alt="'.utf8_encode($row->nome).'">
   <div class="carousel-caption d-none d-md-block">
  <div  class="card text-dark bg-transparent" style="border:none"><h5>'.utf8_encode($row->nome).'</h5>
  <p style="color:black;font-weight:900;"><h5>R$ '.$row->valor.'</h5></p>
</div></div></a></div>');
}

?>  
</div>
<div>
<a class="carousel-control-prev bg-primary" href="#carousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a></div >
<div>
<a class="carousel-control-next bg-primary" href="#carousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
<div class="row row-cols-1 row-cols-md-2 container" style="margin-left:auto;margin-right:auto;margin-top:1em">
<?php
$rs = $conn->query("SELECT idproduto, nome, descr, valor,imagem FROM produtos LIMIT 10 OFFSET 4");
while($row = $rs->fetch(PDO::FETCH_OBJ)){
  ?>
<div class="col mb-4">
    <div class="card">
      <img src="<?=$row->imagem?>" onclick="window.location='produto.php?id=<?=$row->idproduto?>'" class="card-img-top" alt="<?=$row->nome?>">
      <div class="card-body">
        <h5 onclick="window.location='produto.php?id=<?=$row->idproduto?>'" class="card-title"><?=$row->nome?></h5>
        <p class="card-text lead"><?=$row->descr?></p>
        <p class="card-text text-success">R$ <?=$row->valor?></p>
        <a  class="btn btn-primary <?php if(!isset($_SESSION['nome']))echo('disabled');?> " onclick="ccr(<?=$row->idproduto?>)">Adicionar ao carrinho</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>