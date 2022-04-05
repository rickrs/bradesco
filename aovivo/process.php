<?php
include("conexao.inc.php");

$email = $_POST['email'];
$nome = $_POST['nome'];
$pergunta = $_POST['pergunta'];
$evento_id = 1;
$insertStr = "insert into evento_perguntas(evento_id,nome,email,pergunta,data_pergunta) values('$evento_id','$nome','$email','$pergunta',now())";
$insrt = mysqli_query($link, $insertStr);

?>