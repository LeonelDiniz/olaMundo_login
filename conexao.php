<?php
$local = 'localhost';//endereco do banco de dados
$usuario = 'root';//usuario do banco de dados
$senha = '';//senha usuario do banco de dados
$connect = mysql_connect($local,$usuario,$senha) or trigger_error(mysql_error(),E_USER_ERROR);//funcao de conexao
$db = mysql_select_db('login');//banco de dados padrao
