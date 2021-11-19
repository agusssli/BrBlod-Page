<?php

require_once "conection.php";
$asunto=$_POST['asunto'];
$email=$_POST['email'];
$texto=$_POST['texto'];

$obj = new connection();
$con = $obj->connect();
$intruccion_sql = "INSERT INTO contacto(asunto, email, texto)
values ('($asunto)', '($email)', '($texto)')";
$result=$con->prepare($instruccion_sql);
$result->execute();








?>