<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ar Condicionado</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="meuApp" ng-controller="meuController">

      <!-- INÍCIO MENU -->
      <section id="menu">
        <?php include 'cabecalho.php';?> 
      </section>
      <!-- FIM MENU -->

      <!-- INÍCIO ÁREA INICIAL -->
      <section>
        <?php include 'area_inicial.php';?>
      </section>
      <!-- FIM ÁREA INICIAL -->

      <!-- INÍCIO ÁREA MISSÃO -->
      <section id="missao">
        <?php include 'missao.php';?>
      </section>
      <!-- FIM ÁREA MISSÃO -->

      <!-- INÍCIO SERVIÇOS -->
      <section id="servicos">
        <?php include 'servicos.php';?>
      </section>
      <!-- FIM SERVIÇOS -->

      <!-- INÍCIO SOBRE -->
      <section id="sobre">
        <?php include 'sobre.php';?>
      </section>
      <!-- FIM SOBRE -->

      <!-- INÍCIO ÁREA DE PRODUTOS -->
      <section id="produtos">
        <?php include 'produtos.php';?>
      </section>
      <!-- FIM ÁREA DE PRODUTOS -->

      <!-- INÍCIO ÁREA DE CONTATO -->
      <section id="contato">
        <?php include 'rodape.php';?>
      </section>
      <!-- FIM ÁREA DE CONTATO -->

</body>
</html>