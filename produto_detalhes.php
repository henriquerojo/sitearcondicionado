<?php 
include 'conn/connect.php';
$id = $_GET['id'];
$lista = $conn->query("select * from tbprodutos where id like $id;");
$row = $lista->fetch_assoc();
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
    <!-- INCLUSÃO MENU PÚBLICO -->
    <?php include 'cabecalho.php'?>

    <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de ar condicionado">

    <!-- INCLUSÃO CONTATO -->
    <?php include 'rodape.php'?>
</body>
</html>