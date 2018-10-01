<?php

require_once("config.php");

$sql = new Sql();


$usuarios = $sql->select("SELECT * FROM tb_ususarios");

echo json_encode($usuarios);

?>