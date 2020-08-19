<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
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
   
   function GetUserName()
    {
        var user = <?php echo json_encode($_SESSION['nome']); ?>;
        alert(user);    
    }
</script>
</head><body>
<form onsubmit="GetUserName()">
    <input type="submit" class="w3-btn w3-blue">
</form>
<button class="w3-btn w3-red" onclick="window.location.href = 'logout.php';">
</body>
</html>