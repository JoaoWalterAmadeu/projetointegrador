<?php
require("session.php");
?>
<!DOCTYPE html>
<html><head>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="logica.js"></script>
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://kit.fontawesome.com/c1ff9f4537.js" crossorigin="anonymous"></script>    
<link rel="icon" type="image/png" href="images/lowcarbo.svg" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>F.A.Q - LowCarbo</title>
</head>
<body style="visibility:hidden;background-color:white" id="corpo" onload="getapi();">
        <?php include("nav.php")?>
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 ">F.A.Q</h1>
    <p class="lead">Perguntas frequentes</p>
  </div>
</div>
<div class="container">
    <h1 class="font-weight-bold">Q: Qual o objetivo do projeto?</h1>
    <p class="lead">R: Auxiliar pessoas, através da criação de dietas com base em informações sobre a pessoa.</p>
  </div>
  <div class="container">
    <h1 class="font-weight-bold">Q: Como as dietas são formadas?</h1>
    <p class="lead">R: Através do uso de algorítmos que calculam o consumo calórico da pessoa e escolhem uma dieta ideal do nosso banco de dados.</p>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>