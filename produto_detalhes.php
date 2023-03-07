<?php 
include 'conn/connect.php';
$id = $_GET['id'];
$lista = $conn->query("select * from tbprodutos where imagem like $id;");
$row_produto = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Detalhes - Produto</title>
</head>
<body>
    <!-- INÍCIO SE NÃO TIVER NADA -->
    <?php if($num_linhas == 0){?>
        <h2>Não há este produto cadastrado!</h2>
    <?php }?>
    <!-- FIM SE NÃO TIVER NADA -->
</body>
</html>