<?php 
include("session.php");
if(!isset($_SESSION['nome'])){
    echo(" <meta http-equiv='refresh' content='0;url=login.php'>");
}
?>
<!DOCTYPE html>
<html><head>
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
<title>Sua dieta - LowCarbo</title>
</head>

    <body  style="visibility:hidden;" id="corpo" onload="getapi();">
        <?php include("nav.php")?>
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Dieta</h1>
    <p class="lead">Esta página serve para que você possa ver as receitas recomendadas a você com base nas suas informações.</p>
  </div>
</div>
        <div class="card">
  <h5 class="card-header">Selecionar receita</h5>
  <div class="card-body">
    <p class="card-text">Clique no botão para que uma prato seja escolhido para você.</p>
    <btn onclick="gerar_receita(<?php echo("$_SESSION[objetivo]");?>)"  data-target="#collapseExample" data-toggle="collapse" class="btn btn-primary">Selecionar receita</a>
  </div>
<div class="collapse" id="collapseExample">
<div class="card ctrl" style="width: 18rem;">
  <img src="" id="imgr" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title" id="ttr">Receita</h5>
    <p class="card-text" id="ttd"></p>
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