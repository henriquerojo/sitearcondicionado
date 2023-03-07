<?php 
include 'conn/connect.php';
$busca = $_GET['buscar'];
$lista = $conn->query("select * from tbprodutos where imagem like '%$busca%';");
$row_produto = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>