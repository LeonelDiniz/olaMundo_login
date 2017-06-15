<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Principal</title>
    </head>
    <body>
        <p>Bem vindo, <strong><?php echo $_COOKIE['email'];?></strong> você está logado no sistema!</p>
        <p><a href="logout.php">Sair do sistema.</a></p>
    </body>
</html>
