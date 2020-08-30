<?php
require('session.php');?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="logica.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <script type="text/javascript" language="javascript" src="md5.js"></script>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <title>
        Home
    </title>
<script type="text/javascript"> 
function actupdt(){
    var csen2 = document.getElementById("csen").value;
    var p2 = md5(md5(csen2));
    return updtformc(p2);
    
    
}
function ghash(){
 <?php if(isset($_SESSION['nome'])){?>
    var hsen = "<?=$_SESSION['senha']?>";
    cria_cookie('senha',hsen);
 var gravatar ="<?=md5(strtolower(trim($_SESSION['email']))) ?>";
gimg(gravatar); return hsen
 <?php }?>

}

   function GetUserName(action)
    {
        var freg = document.getElementById("regform");
        freg.classList.remove("w3-animate-opacity");
        <?php if(isset($_SESSION['nome'])){ ?>
        atualizar_dados();
        var user = <?php echo json_encode($_SESSION['nome']); ?>;
        pmenu(action);
      
  <?php  }else{ ?>
    sreg('1');
        var lcp = document.getElementById("lcp");
        lcp.classList.add("w3-animate-opacity");
        lcp.style.visibility = 'visible';
    <?php } ?>
    }
    

</script>
</head><body class="w3-blue-grey" onload="pmenu();document.getElementById('pmenu').style.visibility = 'hidden';aaaaa();err();ghash();">
<div id="adform">

</div>

<div id="updateform" class="w3-display-middle w3-indigo w3-card-4" style="min-width:25%;min-height:25%;visibility:hidden">
<h5 class="w3-center">
Formulário de atualização de dados
</h5><button onclick="atualizar_dados()" class="w3-display-topright w3-red w3-text-black w3-btn">
X
</button><div class="ctrl w3-center" id="csform"><div class="w3-card-2"><h3 id="cwarn" class="w3-pink"></h3></div>
<input type="password" placeholder="Digite sua senha atual" id="csen">
<button onclick="actupdt()" id="updtbtn" style="margin-bottom:0px" class="w3-btn w3-green w3-hover-grey w3-center ctrl">Atualizar Dados</button></div>

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
                <button class="w3-btn w3-red w3-display-topright w3-text-black w3-hover-grey" style="margin-top:0px;" onclick="clrf()">X</button>
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
<img id="pimg" class="w3-badge w3-indigo" style="margin-top:15px;"/>
<h3> 
    <?php if(isset($_SESSION['nome'])) {
         echo($_SESSION['nome']);}
          ?>
</h3>
<div <?php if(isset($_SESSION['peso'])) {
         echo("onload=gdiaria(".$_SESSION['objetivo'].",".$_SESSION['peso'].",".$_SESSION['altura'].",".$_SESSION['idade'].",".$_SESSION['sexo'].",".$_SESSION['pe'].")>");}else{
             echo("><h6>Alguns passos são necessários para completar seu registro. Clique no botão abaixo e preencha o formulário</h6>
             <button onclick=atualizar_dados('show') class='w3-btn w3-green w3-hover-grey'>Atualizar dados</button>");
         }
          ?> 

</div>
<button  OnClick="GetUserName('close')" class="w3-btn w3-red w3-display-topright w3-text-black w3-hover-grey" style="margin-top:0px;" >X</button>
</div>

<div class="w3-container w3-card-4 w3-bar" >
<div class="w3-content w3-indigo w3-display-topright">
    <table><tr>
<td><button  OnClick="GetUserName('show')" class="w3-btn w3-blue" style="min-width:5%"><?php if(isset($_SESSION['nome'])){echo("👤Perfil");}else{
    echo("👤Fazer login");
    }?></button><br>
            <?php if(isset($_SESSION['nome'])){?>
            <td><button class="w3-btn w3-red" style="min-width:5%" onclick="logout();">Sair</button><?php }?>
</table>
</div></div></div>
</body>
</html>