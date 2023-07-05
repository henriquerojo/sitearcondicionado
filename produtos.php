<?php 
  include 'conn/connect.php';
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
</head>
<body>
  <div style="padding-top: 50px;">
    <h1 class="alinhar">Produtos</h1>
  </div>
  <div class="alinhar">
    <img src="img/linha.svg" alt="linha decorativa do texto" style="width: 200px;">
  </div>

  <div class="linha w50"> <!-- BOTÕES -->
    <div ng-mouseover="funcaoArcondicionado()" class="borda">
      Ar Condicionado
    </div>
    <div ng-mouseover="funcaoInverter()" class="borda">
      Ar Condicionado Inverter 
    </div>
    <div ng-mouseover="funcaoMultisplit()" class="borda">
      Multi Split
    </div>
    <div ng-mouseover="funcaoEnergiasolar()" class="borda">
      Energia Solar
    </div>  
  </div>
  <div class="alinhador" ng-show="arcondicionado">
    <?php while ($row = $ar->fetch_assoc()) { ?>
      <a href="produto_detalhes.php?id=<?php echo $row['id']; ?>" role="button">
          <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de ar condicionado">
      </a>
    <?php } ?>
  </div>


  <div class="alinhador" ng-show="inverter">
  <?php while ($row = $inverter->fetch_assoc()) { ?>
      <a href="produto_detalhes.php?id=<?php echo $row['id']; ?>" role="button">
          <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de ar condicionado inverter">
      </a>
    <?php } ?>
  </div>

  <div class="alinhador" ng-show="multisplit">
  <?php while ($row = $multi->fetch_assoc()) { ?>
      <a href="produto_detalhes.php?id=<?php echo $row['id']; ?>" role="button">
          <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de ar condicionado multisplit">
      </a>
    <?php } ?>
  </div>

  <div class="alinhador" ng-show="energiasolar">
  <?php while ($row = $solar->fetch_assoc()) { ?>
      <a href="produto_detalhes.php?id=<?php echo $row['id']; ?>" role="button">
          <img src="img/<?php echo $row['imagem']; ?>" alt="imagem de placa solar">
      </a>
    <?php } ?>
  </div>

  <script>
  var app = angular.module('meuApp', []);
  app.controller('meuController', function($scope) {
    $scope.arcondicionado = true;
    $scope.inverter = false;
    $scope.multisplit = false;
    $scope.energiasolar = false;

    $scope.funcaoArcondicionado = function() {
      $scope.arcondicionado = true;
      $scope.inverter = false;
      $scope.multisplit = false;
      $scope.energiasolar = false;
    }

    $scope.funcaoInverter = function() {
      $scope.arcondicionado = false;
      $scope.inverter = true;
      $scope.multisplit = false;
      $scope.energiasolar = false;
    }

    $scope.funcaoMultisplit = function() {
      $scope.arcondicionado = false;
      $scope.inverter = false;
      $scope.multisplit = true;
      $scope.energiasolar = false;
    }

    $scope.funcaoEnergiasolar = function() {
      $scope.arcondicionado = false;
      $scope.inverter = false;
      $scope.multisplit = false;
      $scope.energiasolar = true;
    }
  });
  </script>  
</body>
</html>

