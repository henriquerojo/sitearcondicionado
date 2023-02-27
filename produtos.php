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