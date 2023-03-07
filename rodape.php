<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section id="contato">
    <div id="imagem_contato">
      <img src="img/ar_condicionado.png" alt="imagem ar condicionado" class="imagem_contato">
    </div>
    <article>
      <p>Contato</p>
      <img src="img/linha.svg" alt="linha decorativa do texto" class="linhadcontato">
      <div class="ml mt" id="forma_contato">
        <div>
          <h1>Avenida Itaquera, 8266 - São Paulo - SP</h1>
        </div>
        <div>
          <h1>
            Celular: +55 11 9 9999-9999
            <br>
            E-mail:ar@gmail.com
          </h1>
        </div>
      </div>
      
      <div id="formulario" class="ml mt">
        <form action="submit">
            <input type="text" ng-model="nome" placeholder="Digite seu Nome" class="borda">
            <input type="text" ng-model="email" placeholder="Digite seu E-mail" class="borda">
        </form>
        <form>
            <textarea name="mensagem" id="mensagem" rows="8" cols="51" placeholder="Mensagem" class="mt"></textarea>
        </form>
        <input type="button" action="submit" value="Enviar"> 
    </div>
    </article>
    
  </section>
    
</body>
</html>
