
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<a href="index.php"  class="navbar-brand text-info" >
  <img src="images/lowcarbo.svg" class="d-inline-block align-top" alt="" loading="lazy"> LowCarbo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
 
      <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/index.php"){
          echo('active'); 
      } ?>">
        <a class="nav-link" href="<?php if($_SERVER["REQUEST_URI"]=="/pi/index.php"){
          echo('#'); 
      }else{ echo('index.php');} ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if($_SERVER["REQUEST_URI"]=="/pi/produtos.php"){
          echo('active'); 
      } ?>">
        <a class="nav-link" href="<?php if($_SERVER["REQUEST_URI"]=="/pi/produtos.php"){
          echo('#'); 
      }else{ echo('produtos.php');} ?>">Produtos</a>
      </li>
      <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/contato.php"){
          echo('active'); 
      } ?>">
        <a class="nav-link " href="<?php if($_SERVER["REQUEST_URI"]=="/pi/contato.php"){
          echo('#'); 
      }else{ echo('contato.php');} ?>">Contato</a>
      </li>
      <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/faq.php"){
          echo('active'); 
      } ?>">
        <a class="nav-link" href="<?php if($_SERVER["REQUEST_URI"]=="/pi/faq.php"){
          echo('#'); 
      }else{ echo('faq.php');} ?>">F.A.Q</a>
      </li><?php if(isset($_SESSION["id"])){

?>
      <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/carrinho.php"){
          echo('active'); 
      } ?>">
      <a class="nav-link " href="<?php if($_SERVER["REQUEST_URI"]=="/pi/carrinho.php"){
          echo('#'); 
      }else{ echo('carrinho.php');} ?>"><i class="fas fa-shopping-cart"></i>
  Carrinho <span class="badge badge-dark bg-info" id="carrinho"></span>
  <span class="sr-only">carrinho</span>
    </a></li><?php } ?>
    <?php if(isset($_SESSION['nome'])){?>
    <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/gerar.php"){
          echo('active'); 
      } ?>">
        <a class="nav-link" href="<?php if($_SERVER["REQUEST_URI"]=="/pi/gerar.php"){
          echo('#'); 
      }else{ echo('gerar.php');} ?>">Dieta <span class="sr-only">(current)</span></a>
      </li>
      <?php } ?>
      <li class="nav-item <?php if($_SERVER["REQUEST_URI"]=="/pi/perfil.php"){
          echo('active'); 
      } ?>" style="float:left; display: inline-block;margin-top:0">
        <?php if(isset($_SESSION['nome'])){?>
        <a class="nav-link" id="dda"  href="<?php if($_SERVER["REQUEST_URI"]=="/pi/perfil.php"){
          echo('#'); 
      }else{ echo('perfil.php');} ?>" ><img id="pimg3" class="rounded-circle" src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($_SESSION['email'])))?>?s=20"> Perfil</a><?php } ?>
       <?php if(!isset($_SESSION['nome'])){?>
           <a class="hvr-icon nav-link" href="login.php" style="float:left; display: inline-block;"><i class="far fa-user-circle "></i><h6 style="float:left; display: inline-block;margin-right:5px;">Fazer login/Registrar</h6>  </a>
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
<div class="spinner-border text-primary meio" id="spinner" style="width: 3rem; height: 3rem;" role="status">
    <span class="sr-only ">Carregando...</span>
</div>
</div>

