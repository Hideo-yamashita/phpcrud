<?php
$nome = $_POST['nome_cli'];
$celular = $_POST['celular_cli'];
try
{
    $conexao = new PDO("mysql:host=localhost;port=3306;dbname=test","root","devisate");
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}



$comando  = $conexao ->prepare("INSERT INTO CLI (nome,celular) VALUES (:nome,:celular) ");

$comando ->bindParam(':nome',$nome);
$comando ->bindParam(':celular',$celular);
$comando ->execute();

?>