<?php

$host 	= "127.0.0.1"; //computador onde o servidor de banco de dados esta instalado
$user 	= "root"; //seu usuario para acessar o banco
$pass 	= "root"; //senha do usuario para acessar o banco
$banco 	= "tutorial"; //banco que deseja acessar

$connect = mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());
$db = mysqli_select_db($connect, $banco);


?> 


