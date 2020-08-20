<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <script type="text/javascript" language="javascript" src="jh.js"></script>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta charset="UTF-8">
    <title>
        Home
    </title>

<?php
require('session.php');
if(!isset($_SESSION['nome'])){
    ?>
        <script type="text/javascript">
        alert("Faça login");
        window.location.href = 'logout.php';
    </script>
    <?php
}
?>
<script type="text/javascript">
   function GetUserName(action)
    {
        var user = <?php echo json_encode($_SESSION['nome']); ?>;
        pmenu(action);
    }
</script>
</head><body class="w3-blue-grey" onload="pmenu();">
<div class="w3-container w3-display-top">
<div id='pmenu' class="w3-center w3-light-blue form w3-card-4"  >
<h1>
    <?php echo($_SESSION['nome']) ?>
</h1>
<button  OnClick="GetUserName('close')" class="w3-btn w3-red">Fechar</button>
</div>

<div class="w3-container w3-display-topright w3-right w3-right-align w3-indigo w3-card-4" >
<div class="w3-content">
    <table><tr>
            <td><button  OnClick="GetUserName('show')" class="w3-btn w3-blue" style="min-width:5%">Perfil</button><br>
            <td><button class="w3-btn w3-red" style="min-width:5%" onclick="window.location.href = 'logout.php';">Sair</button>
</table>
</div></div></div>
</body>
</html>