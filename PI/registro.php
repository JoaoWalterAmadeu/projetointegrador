<?php
require('session.php');
if(isset($_SESSION["nome"])){
  require('perfil.php');
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
<title>Registro - LowCarbo</title>
</head>
    <body style="visibility:hidden;" id="corpo" onload="getapi();">
        <?php include("nav.php")?>

    <div class="card ctrl" style="background-color:white;width:85%;margin-top:2%" onmouseover="manage();" onkeyup="manage();">
    
    <div class="card-body">
    <h1>Registro</h1>
    <div class="alert alert-danger" role="alert" id="poperr" style="visibility:hidden">
</div>
<form method="post" action="handler.php">
<div class="form-group row">
    <label for="rnome" class="col-sm-2 col-form-label"  >Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rnome" name="nome" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="mailcc" class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="mailcc" name="email" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="rsenha" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" style="display: inline-block"  name="pw" id="rsenha" required>
      <span onclick="ssenha('rsenha')" style="position:absolute;float:right;margin-left:-2.9em;" class="btn btn-outline-primary text-wrap"><i class="fa fa-fw fa-eye"></i>
    </div>
  </div>
  <div class="form-group row">
    <label for="rsenha2" class="col-sm-2 col-form-label">Confirme sua senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" style="display: inline-block"  name="pwc" id="rsenha2" required>
      <span onclick="ssenha('rsenha2')" style="position:absolute;float:right;margin-left:-2.9em;" class="btn btn-outline-primary text-wrap"><i class="fa fa-fw fa-eye"></i>
    </div>
  </div>

<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="1" >
          <label class="form-check-label" for="gridRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="2">
          <label class="form-check-label" for="gridRadios2">
            Feminino
          </label>
        </div>
      </div>
    </div>
  </fieldset><br>
  <input type="submit" class="btn btn-primary btn-lg fwd" id="regbtn" name="reg" value="Fazer Registro">
</form>
<a href="login.php" class="btn btn-danger fwd" style="margin-top:5px">Já tem uma conta? Faça login</a>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>