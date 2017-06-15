<?php

require './conexao.php';

//recebe o valores passados via post do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

if(isset($entrar)){
    
    $verifica = mysql_query("select * from formulario where email = '$email' and senha = '$senha'") or die("Erro ao selecionar");
    if(mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login ou senha incorretos!');window.location.href='index.html';</script>"; 
               
    }else{
        
        setcookie("email",$email);
        header("location:principal.php");
        
    }
    
}
