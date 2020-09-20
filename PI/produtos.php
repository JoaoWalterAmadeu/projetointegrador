<?php
require('session.php');?>
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>
        Produtos
    </title>
</head><body class="w3-white" style="visibility:hidden;" id="corpo" onload="getapi();slider();">
<?php include("nav.php")?>

<div class="w3-auto">
<div id="carousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
<?php
$i = 0;
require("conn.php");
$rs = $conn->query("SELECT idproduto, nome, descr, valor,imagem FROM produtos ORDER BY nvisitas DESC LIMIT 5");
while($row = $rs->fetch(PDO::FETCH_OBJ)){
 echo('<div class="carousel-item"><a href="produto.php?id='.$row->idproduto.'">');
  echo('<img class="d-block w-100 " src="'.$row->imagem.'" alt="'.$row->nome.'">
   <div class="carousel-caption w3-display-bottom ">
  <div style="background-color:#00aba9;opacity:0.5" class="card"><div style="opacity:1.0;"><h5 >'.$row->nome.'</h5>
  <p style="color:black;font-weight:900;"><h5>R$ '.$row->valor.'</h5></p></div>
</div></div></a></div>');
}

?>  
</div>
<div>
<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a></div >
<div>
<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a></div>
</div></div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>