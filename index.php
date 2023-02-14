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
      <!-- FIM ÁREA INICIAL -->

      <!-- INÍCIO ÁREA MISSÃO -->
      <section id="missao">
        <div class="alinhar fundo_amarelo">
          <div>
            <img src="img/medalhinha.jpg" alt="" class="medalha">
            <h4>Missão</h4>
            <p>Nossa missão é bla bla bla</p>
          </div>
          <div>
            <img src="img/medalhinha.jpg" alt="" class="medalha">
            <h4>Visão</h4>
            <p>Nossa missão é bla bla bla</p>
          </div>
          <div>
            <img src="img/medalhinha.jpg" alt="" class="medalha">
            <h4>Valores</h4>
            <p>Nossa missão é bla bla bla</p>
          </div>
        </div>
      </section>
      <!-- FIM ÁREA MISSÃO -->

      <!-- INÍCIO SERVIÇOS -->
      <section id="servicos">
        <h1 class="alinhar">Serviços</h1>
        <div class="alinhar">
          <img src="img/linha.svg" alt="linha decorativa do texto" class="linhad">
        </div>
        <div class="alinharserv margemcima">
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div charset>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
        </div>
        <div class="alinharserv margembaixo">
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
          <div class="quadrado">
            imagem
          </div>
          <div class="quadradoa">
            texto
          </div>
        </div>
      </section>
      <!-- FIM SERVIÇOS -->

      <!-- INÍCIO SOBRE -->
      <section id="sobre">
        <div class="alinhar2 fundocinza">
          <div id="sobre">
            <h1 class="alinhar">Sobre Nós</h1>
          <div class="alinhar margemcima">
            <img src="img/linha.svg" alt="linha decorativa do texto" class="linhadsobre">
          </div>
          <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nam aliquid omnis? Nihil possimus nisi magnam reiciendis. Adipisci dignissimos quod accusantium explicabo porro vero, neque deleniti voluptate at reiciendis quisquam?
          </div>
          </div>
          <div class="teste"> <!-- LOGO DA EMPRESA -->
            
          </div>
        </div>
      </section>
      <!-- FIM SOBRE -->

      <!-- INÍCIO ÁREA DE PRODUTOS -->
      <section id="produtos">
        <h1 class="alinhar">Produtos</h1>
        <div class="alinhar">
          <img src="img/linha.svg" alt="linha decorativa do texto" class="linhad">
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
        <div class="linha w100" ng-show="arcondicionado" class="alinhamento_imagens"> <!-- IMAGENS -->
          <div>
            <img src="img/ar1.jpg" alt="imagem de ar-condicionado" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/ar2.jpg" alt="imagem de ar-condicionado" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/ar3.jpg" alt="imagem de ar-condicionado" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/ar4.jpg" alt="imagem de ar-condicionado" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/ar5.jpg" alt="imagem de ar-condicionado" class="tamanho_imagem">
          </div>
        </div>


        <div class="linha w100" ng-show="inverter" class="alinhamento_imagens">
          <div>
            <img src="img/inverter1.jpg" alt="ar-condicionado inverter" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/inverter2.jpg" alt="ar-condicionado inverter" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/inverter3.jpg" alt="ar-condicionado inverter" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/inverter4.jpg" alt="ar-condicionado inverter" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/inverter5.jpg" alt="ar-condicionado inverter" class="tamanho_imagem">
          </div>
        </div>

        <div class="linha w100" ng-show="multisplit" class="alinhar2">
          <div>
            <img src="img/multisplit1.jpg" alt="ar-condicionado multisplit" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/multisplit2.jpg" alt="ar-condicionado multisplit" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/multisplit3.jpg" alt="ar-condicionado multisplit" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/multisplit4.jpg" alt="ar-condicionado multisplit" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/multisplit5.jpg" alt="ar-condicionado multisplit" class="tamanho_imagem">
          </div>
        </div>

        <div class="linha w100" ng-show="energiasolar" class="alinhar2">
          <div>
            <img src="img/solar.webp" alt="imagem de painel solar" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/solar.webp" alt="imagem de painel solar" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/solar.webp" alt="imagem de painel solar" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/solar.webp" alt="imagem de painel solar" class="tamanho_imagem">
          </div>
          <div>
            <img src="img/solar.webp" alt="imagem de painel solar" class="tamanho_imagem">
          </div>
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
      </section>
      <!-- FIM ÁREA DE PRODUTOS -->

      <!-- INÍCIO ÁREA DE CONTATO -->
      <section id="contato">
        <?php include 'rodape.php';?>
      </section>
      <!-- FIM ÁREA DE CONTATO -->

</body>
</html>