<?php

$HOST = 'localhost';
$USER = 'root';
$DB = 'crud';
$PASS = '123456789';

$conecta = mysqli_connect($HOST, $USER, $PASS, $DB);

if(!$conecta){
  echo "Não conectado";
  echo "<br>";
  echo "Erro: " . mysqli_connect_errno();
  echo "<br>";
  echo "Erro: " .mysqli_connect_error();
  exit();
}