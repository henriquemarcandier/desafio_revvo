<?php
$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "desafio_revvo";
$con = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);
$conn = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
    die("Falha ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Opcional: definir charset
mysqli_set_charset($con, "utf8");
?>