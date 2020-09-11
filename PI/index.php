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
    
<script type="text/javascript"> 
function ghash(){
 <?php if(isset($_SESSION['nome'])){?>
 var gravatar ="<?=md5(strtolower(trim($_SESSION['email'])))?>";
 gimg(gravatar); 
 <?php }?>
}

   function GetUserName(action)
    {
        var freg = document.getElementById("regform");
        var navbar = document.getElementById("navbarNav");
        navbar.classList="navbar-collapse collapse";
        freg.classList.remove("w3-animate-opacity");
        <?php if(isset($_SESSION['nome'])){ ?>
        atualizar_dados();
        var user = <?php echo json_encode($_SESSION['nome']); ?>;
        pmenu(action);
      
  <?php  }else{ ?>
    sreg('1');
        var poper = document.getElementById("poperr3");
        poper.style.visibility = "hidden";
        var lcp = document.getElementById("lcp");
        lcp.classList.add("w3-animate-opacity");
        lcp.style.visibility = 'visible';
    <?php } ?>
    }
</script>
<script src="https://kit.fontawesome.com/c1ff9f4537.js" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="hover.css">
<link rel="manifest" href="manifest.webmanifest">
<title>
        Home
    </title>
</head><body class="w3-white" style="visibility:hidden;" id="corpo" onload="getapi();pmenu();document.getElementById('pmenu').style.visibility = 'hidden';aaaaa();ghash();">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LowCarbo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">F.A.Q</a>
      </li>
      <li class="nav-item " style="float:left; display: inline-block;">
        <?php if(isset($_SESSION['nome'])){?>
        <a class="nav-link w3-text-black" id="dda"  href="#" OnClick="GetUserName('show')" ><img id="pimg3" class="rounded-circle" src=""> Perfil</a><?php } ?>
       <?php if(!isset($_SESSION['nome'])){?>
           <a class="far fa-user-circle hvr-icon nav-link w3-text-black" href="#" OnClick="GetUserName('show')" style="float:left; display: inline-block;"><h6 style="float:left; display: inline-block;margin-right:5px;">Fazer login</h6>  </a>
           <?php } ?>
      </li>
      <?php if(isset($_SESSION['nome'])){?>
                
        <li class="nav-item w3-center w3-right" style="float:left; display: inline-block;">
         <a class="fwd w3-red hvr-icon-forward nav-link" href="#" style="min-width:5%" onclick="logout();"><i class="fas fa-sign-out-alt hvr-icon"></i> Sair</a>
            
             </li>
                <?php }?>
                
    </ul>
  </div>
</nav>
<div class="overlay " id="overlay" style="visibility:visible">
<div class="spinner-border text-primary meio" id="spinner" role="status">
    <span class="sr-only ">Carregando...</span>
</div>
</div>
<div id="updateform" class="w3-display-middle w3-indigo w3-card-4" style="min-width:25%;visibility:hidden">
<h5 class="w3-left-align" style="margin-left:16px">
Atualize seus dados</h5>
<img id="pimg2" class="w3-badge w3-indigo ctrl w3-image" style="margin-top:15px;"/>
<button onclick="atualizar_dados()" style="position:absolute" class="w3-display-topright w3-red w3-text-black w3-btn hvr-grow w3-hover-gray">X</button>
<div class="ctrl w3-center " id="csform" style="position:relative">
<div class="w3-card-2"><h3 id="cwarn" class="w3-pink"></h3></div>
<h5 class="w3-text-white">Informe sua senha para continuar</h5>
<input type="password" class="w3-input " placeholder="Digite sua senha atual" id="csen"/>
    <button onclick="actupdt()" id="updtbtn"  class="w3-btn w3-green w3-hover-grey w3-center ctrl" style="margin-top:5px" >Avançar</button>

    <div id="adform" onmouseover="updtmng()" class="w3-indigo w3-panel" style="visibility:hidden;margin-top:20px">
        <form method="POST" action="handler.php">
        <div class="w3-tooltip"><span class="w3-text">E-mail</span>
        <input type="email" style="display: inline-block" name='email' id="mail" class="w3-input " placeholder="Informe um novo email" value="<?php if(isset($_SESSION['email'])){echo($_SESSION['email']);} ?>" disabled="">
          <a class="w3-btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('email')"><i class=" far fa-edit" ></i></a>
          </div>
      <div>  
      <input type="password"  style="display: inline-block" name='pw' id="cpwc" class="w3-input" onkeyup="updtmng()" placeholder="Nova senha(deixe em branco caso não queira mudar)" disabled>
      <a class="w3-btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('pw')"><i class=" far fa-edit" ></i></a>
          
           <input type="password" name='pwc' class="w3-input" onkeyup="updtmng()" id="cpw" placeholder="Repita a nova senha" disabled></div>
        <div class="w3-tooltip"><span class="w3-text">Peso
        </span>   
        <input type="number" class="w3-input" id="peso" value="<?=$_SESSION['peso']?>" style="display: inline-block" placeholder="Peso(Kg)" name="pesoi" disabled>
        <a class="w3-btn w3-green w3-hover-gray w3-card" style="position:absolute" onclick="uli('peso')"><i class=" far fa-edit" ></i></a></div>
        <div class="w3-tooltip">  <span class="w3-text ">Altura</span>
         <input type="number" class="w3-input " id="altura" value="<?=$_SESSION['altura']?>"  style="display: inline-block" placeholder="Altura(cm)" name="alturai" disabled>
        <a class="w3-btn w3-green w3-hover-gray w3-card" style="position:absolute"  onclick="uli('altura')"><i class=" far fa-edit" ></i></a></div>
        <input type="">
            <input type="submit" id="upbtn" class="w3-btn w3-green w3-hover-grey" style="margin-top:16px" name="updt" value="Atualizar">
        </form>
</div>
</div>
</div>

</div>
<div id="regform" onmouseover="manage();" onkeyup="manage();" style="visibility:hidden" >
<div class="w3-container w3-indigo w3-card-4 w3-center w3-display-middle" style="min-width: 30%; max-width: 50%;">
<h6 id="warn">
</h6>
<h6 id="warn2">
</h6>
        <div class="w3-content " >
            <h1>
            Registro
            </h1>
                <div class="w3-card-2" id="poperr3" >
                <h6>
                Usuário já registrado!
                </h6></div></div>
                <button class="w3-btn w3-red w3-display-topright w3-text-black w3-hover-grey hvr-grow" style="margin-top:0px;" onclick="clrf()">X</button>
<form method="post" action="handler.php" id="formreg" onmouseover="manage();">
    <input type="text" name="nome" id="rnome" placeholder="Seu nome" class="w3-input" ><br>
    <input type="email" name="email" id="mailcc" placeholder="Seu endereço de e-mail" class="w3-input" ><br>
    <div id="warnb" class=" w3-large w3-center w3-text-light-blue w3-indigo w3-card-4 " onclick="alert(msg);"></div>
    <input type="password" name="pw" id="rsenha" placeholder="Senha" class="w3-input"><br>
    <label id="warn" class=" w3-large w3-center w3-text-light-blue w3-indigo w3-card-4 "></label>
    <input type="password" name="pwc" id="rsenha2" placeholder="Confirme a senha" class="w3-input "><br>
    <div class="w3-centered"> 
        <table><th><h6>Sexo:</h6></th><tbody>
       <td><input type="radio" id="male" name="sexo" value="1" class="w3-radio">
      <td><label for="male" class=" w3-left-align" >Masculino</label>
       <td><input type="radio" id="female" name="sexo" value="0" class="w3-radio" >
       <td><label for="female" class="w3-left-align" >Feminino</label></tbody></table></div>
        <input type="submit" id="regbtn" name="reg" value="Registrar"  class="w3-btn w3-green  w3-hover-pale-green " style="margin-bottom:5px" disabled></form>
         <button onclick="clrf();GetUserName('show')" class='w3-text-white w3-text w3-btn w3-blue '>Já tem uma conta?</button>

</div></div>
<div class="w3-container">
    <div id="lcp" class="w3-card-4 w3-display-middle" style="min-width:50%;visibility:hidden" onkeyup="vf();">
    <div class="w3-container w3-indigo w3-card-4 w3-center w3-display-middle form" ><div class="w3-content" onmouseover="vf();">
    <h1>Login</h1>
    <div class="w3-card-2 w3-pink w3-hover-red w3-center w3-content"  id="poperr">
        <h6>
        Usuário não encontrado!
        </h6>
        </div>
        <h6 id="lblb">
</h6>
<form method="post" action="handler.php">
<input type="text" id="nome" placeholder="Nome" class="w3-input" name="nome"><br>
<input type="password"  id="senha" class="w3-input" name="pw" placeholder="Senha"><br>
<input type="submit" class="w3-btn w3-green" name="log" id="log" value="Fazer Login" disabled >
</form>
<button class="w3-btn w3-red w3-display-topright w3-text-black w3-hover-grey" style="margin-top:0px;" onclick="clcp()">
    X
</button>
<button onclick="sreg()" class="w3-btn w3-blue" style="margin-top:5px">Registre-se aqui</button>
    </div></div></div>
<div id='pmenu' class="w3-container w3-indigo w3-card-4 w3-center w3-display-middle form" style="min-width: 15%; max-width: 45%;visibility:hidden">
<img id="pimg" class="w3-badge w3-indigo ctrl w3-image" style="margin-top:15px;"/>
<h3> 
    <?php if(isset($_SESSION['nome'])) {
         echo($_SESSION['nome']);}
          ?>
</h3>
<div <?php if(isset($_SESSION['peso'])) {
         echo("onload=gdiaria(".$_SESSION['objetivo'].",".$_SESSION['peso'].",".$_SESSION['altura'].",".$_SESSION['idade'].",".$_SESSION['sexo'].",".$_SESSION['pe'].")>
          <a class='w3-btn w3-green w3-hover-gray w3-card hvr-grow fwd hvr-icon-grow' style='position:relative' onclick=atualizar_dados('show')><i class=' fas fa-user-edit hvr-icon'></i></a>
          </div>");}else{
             echo("><h6>Alguns passos são necessários para completar seu registro. Clique no botão abaixo e preencha o formulário</h6>
             <button onclick=atualizar_dados('show') class='w3-btn w3-green w3-hover-grey'>Atualizar dados</button></div>");
         }
          ?> 

<button  OnClick="GetUserName('close')" class="w3-btn w3-red w3-display-topright w3-text-black w3-hover-grey hvr-grow" style="margin-top:0px;" >X</button>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>