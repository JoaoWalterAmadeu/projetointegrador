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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="logica.js"></script>
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <script type="text/javascript" language="javascript" src="md5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://kit.fontawesome.com/c1ff9f4537.js" crossorigin="anonymous"></script>    
<script src="Chart.js"></script>
<link rel="icon" type="image/png" href="images/lowcarbo.svg" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>
Perfil
</title></head>
<body  style="visibility:hidden;" id="corpo" onload='getapi();'>
<?php  include("nav.php"); ?>
<div class="card bg-light" style="width: 100%;height:100%;border:none">
  <div class="card-body " style="margin-right:auto;margin-left:auto">
  <h5 class="card-title "><img id="pimg" class=" rounded-circle"   src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($_SESSION['email'])))?>"/> <?php if(isset($_SESSION['nome'])) {
         echo(utf8_encode($_SESSION['nome']));}
          ?></h5> </div><div><?php if(!isset($_SESSION['peso'])&&(!isset($_SESSION['pe']))) {?>
              <?php ?>
               <h6 class='text-center'>Alguns passos são necessários para completar seu registro. Clique no botão abaixo e preencha o formulário</h6>
              <?php
           }
            ?> 
            <button class="btn btn-primary ctrl" style="min-width:20%"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
             <i class="far fa-edit  "></i>Atualizar dados</button>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body" style="margin-right:5%;margin-left:5%">
  <div id="updateform"  >
<h5  style="margin-left:16px">
Atualize seus dados</h5>
<img id="pimg2" class="ctrl " style="margin-top:15px;"/>
<div class="ctrl  " id="csform" >
<div class="alert alert-danger" id="cwarn" style="visibility:hidden;" role="alert"><h3></h3></div>
<div class="form-group row">
<form onsubmit="actupdt();return false" class="fwd">
    <h5 style="margin-left:1%"><label for="csen">Informe sua senha para continuar</label></h5>
    <input type="password" class="form-control" id="csen">
  <input type="submit"  id="updtbtn"  class="btn btn btn-success fwd" style="margin-top:5px" value="Avançar">
</form></div>
    <div id="adform" onmouseover="updtmng()" style="visibility:hidden;margin-top:20px;max-width:75%;margin-left:auto;margin-right:auto;" >
        <form method="POST" action="handler.php">
        <div class="form-group row">
        <label for="mail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" style="display: inline-block" name='email' id="mail" class="form-control " placeholder="Informe um novo email" value="<?php if(isset($_SESSION['email'])){echo($_SESSION['email']);} ?>" disabled="">
          <a class="btn" style="position:absolute" onclick="uli('email')"><i class=" far fa-edit" ></i></a>
          </div>
          </div>
          <div class="form-group row">
        <label for="cpwc" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-10">
        <div><input type="password"  style="display: inline-block" name='pw' id="cpwc" class="form-control" onkeyup="updtmng()" placeholder="Nova senha" disabled>
        <span class="btn far fa-edit " style="position:absolute;float:right" onclick="uli('pw')"></span></div><div>
        <input type="password" style="display: inline-block" name='pwc' class="form-control " onkeyup="updtmng()" id="cpw" placeholder="Repita a nova senha" disabled> 
        <span onclick="ssenha('cpwc')" style="position:absolute;" class="btn fa fa-fw fa-eye"></span></div>
        </div>
        </div>
           <div class="form-group row">
        <label for="peso" class="col-sm-2 col-form-label">Peso</label>
        <div class="col-sm-10">
        <input type="number" class="form-control " id="peso" value="<?=$_SESSION['peso']?>" style="display: inline-block" placeholder="Peso(Kg)" name="pesoi" disabled>
        <a class="btn" style="position:absolute" onclick="uli('peso')"><i class=" far fa-edit" ></i></a></div>
        </div>
        <div class="form-group row">
        <label for="altura" class="col-sm-2 col-form-label">Altura</label>
        <div class="col-sm-10">
         <input type="number" class="form-control  " id="altura" value="<?=$_SESSION['altura']?>"  style="display: inline-block" placeholder="Altura(cm)" name="alturai" disabled>
        <a class="btn btn" style="position:absolute"  onclick="uli('altura')"><i class=" far fa-edit" ></i></a>
        </div>
           </div>
        <div class="form-group row">
        <label for="idade" class="col-sm-2 col-form-label">Idade</label>
        <div class="col-sm-10">
         <input type="number" class="form-control  " id="idade" value="<?=$_SESSION['idade']?>"  style="display: inline-block" placeholder="Idade" name="idadei" disabled>
        <a class="btn btn" style="position:absolute"  onclick="uli('idade')"><i class=" far fa-edit" ></i></a>
        </div>
</div>
<div class="form-group row">
        <div class="col-sm-10">
<select class="custom-select custom-select-sm form-control " name="obj">
  <option selected>Qual seu objetivo?</option>
  <option value="1">Perda de peso</option>
  <option value="2">Manter o peso</option>
  <option value="3">Ganho de peso</option>
</select>
</div></div>
        <div class="form-group row ctrl" style="margin-top:2rem">
        <div class="col-sm-10">
        <div class="custom-control custom-switch ">
  <input type="checkbox" class="custom-control-input" id="Switch" name="pe" value="exercicios">
  <label class="custom-control-label" for="Switch">Pratica exercícios físicos?</label>
</div>
</div>
        </div>
            <input type="submit" id="upbtn" class="btn btn btn-success fwd" style="margin-top:16px" name="updt" value="Atualizar">
        </form>
</div>
</div>
    </div>
</div>
</div>
<div class="container" style="margin-left:auto;text-align:center">
<h5 id="tcb" ></h5>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>