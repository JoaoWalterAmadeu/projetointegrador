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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>
Perfil
</title></head>
<body class="w3-white" style="visibility:hidden;background-color:white" id="corpo" onload="getapi();">
<?php include("nav.php") ?>


</div>
</div>
<div class="card w3-center" style="width: 100%;height:100%;border:none">
<img id="pimg" class=" rounded-circle ctrl w3-image" style="margin-top:15px;"  src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($_SESSION['email'])))?>"/>
  <div class="card-body">
    <h5 class="card-title"><?php if(isset($_SESSION['nome'])) {
         echo($_SESSION['nome']);}
          ?></h5>
    <div <?php if(isset($_SESSION['peso'])) {
         echo("onload=gdiaria(".$_SESSION['objetivo'].",".$_SESSION['peso'].",".$_SESSION['altura'].",".$_SESSION['idade'].",".$_SESSION['sexo'].",".$_SESSION['pe'].")>
          
          </div>");}else{
             echo("><h6>Alguns passos são necessários para completar seu registro. Clique no botão abaixo e preencha o formulário</h6>
             </div>");
         }
          ?> 
</div>


<p>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Atualizar dados
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body w3-centered" style="margin-right:5%;margin-left:5%">
  <div id="updateform"  >
<h5 class="w3-left-align" style="margin-left:16px">
Atualize seus dados</h5>
<img id="pimg2" class="w3-badge w3-indigo ctrl w3-image" style="margin-top:15px;"/>
<div class="ctrl w3-center " id="csform" >
<div class="alert alert-danger" id="cwarn" style="visibility:hidden;" role="alert"><h3></h3></div>
<div class="form-group row">
    <h5 style="margin-left:1%"><label for="csen">Informe sua senha para continuar</label></h5>
    <input type="password" class="form-control" id="csen">
  </div><button onclick="actupdt();"  id="updtbtn"  class="btn w3-green w3-hover-grey w3-center ctrl" style="margin-top:5px" >Avançar</button>

    <div id="adform" onmouseover="updtmng()" style="visibility:hidden;margin-top:20px">
        <form method="POST" action="handler.php">
        <div class="w3-tooltip"><span class="w3-text">E-mail</span>
        <input type="email" style="display: inline-block" name='email' id="mail" class="form-control " placeholder="Informe um novo email" value="<?php if(isset($_SESSION['email'])){echo($_SESSION['email']);} ?>" disabled="">
          <a class="btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('email')"><i class=" far fa-edit" ></i></a>
          </div>
      <div>  
      <input type="password"  style="display: inline-block" name='pw' id="cpwc" class="form-control" onkeyup="updtmng()" placeholder="Nova senha(deixe em branco caso não queira mudar)" disabled>
      <a class="btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('pw')"><i class=" far fa-edit" ></i></a>
          
           <input type="password" name='pwc' class="form-control " onkeyup="updtmng()" id="cpw" placeholder="Repita a nova senha" disabled></div>
        <div class="w3-tooltip"><span class="w3-text">Peso</span>   
        <input type="number" class="form-control " id="peso" value="<?=$_SESSION['peso']?>" style="display: inline-block" placeholder="Peso(Kg)" name="pesoi" disabled>
        <a class="btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('peso')"><i class=" far fa-edit" ></i></a></div>
        <div class="w3-tooltip">  <span class="w3-text ">Altura</span>
         <input type="number" class="form-control  " id="altura" value="<?=$_SESSION['altura']?>"  style="display: inline-block" placeholder="Altura(cm)" name="alturai" disabled>
        <a class="btn w3-green w3-hover-gray w3-card" style="position:absolute"  onclick="uli('altura')"><i class=" far fa-edit" ></i></a></div>
        <input type="">
            <input type="submit" id="upbtn" class="btn w3-green w3-hover-grey" style="margin-top:16px" name="updt" value="Atualizar">
        </form>
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