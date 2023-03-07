<?php 
include 'conn/connect.php';
$id = $_GET['id'];
$lista = $conn->query("select * from tbprodutos where imagem like $id;");
$row_produto = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
$ar = $conn->query("SELECT * FROM tbprodutos WHERE id_tipo = 1 ORDER BY id;");
$inverter = $conn->query("SELECT * FROM tbprodutos WHERE id_tipo = 2 ORDER BY id;");
$multi = $conn->query("SELECT * FROM tbprodutos WHERE id_tipo = 3 ORDER BY id;");
$solar = $conn->query("SELECT * FROM tbprodutos WHERE id_tipo = 4 ORDER BY id;");
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
    <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de ar condicionado">
</body>
</html>