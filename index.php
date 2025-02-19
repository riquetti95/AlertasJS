<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exemplo</title>

  <!-- Link para o CSS do Bootstrap (CDN) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="assets/css/src/toastr/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
  <div class="container mt-5">
    <h2>Formulário de Teste</h2>
    <form id="meuFormulario">
      <!-- Combobox para selecionar uma opção -->
      <div class="mb-3">
        <label for="opcao" class="form-label">Selecione uma opção:</label>
        <select id="opcao" name="opcao" class="form-control" required>
          <option value="mensagem">mensagem</option>
          <option value="aviso">aviso</option>
          <option value="erro">erro</option>
          <option value="token">token</option>
          <option value="sucesso">sucesso</option>
        </select>
      </div>

      <!-- Input para testar -->
      <div class="mb-3">
        <label for="teste" class="form-label">Mensagem de teste:</label>
        <input type="text" id="teste" name="teste" class="form-control" placeholder="Digite algo" required>
      </div>

      <!-- Botão de envio -->
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <br>
  <input type="text" id="url" name="url" class="form-control" placeholder="URL" value="<?php echo $_SERVER["REQUEST_URI"]; ?>">
  <script>
    document.getElementById("meuFormulario").addEventListener("submit", function(event) {
      event.preventDefault(); // Impede o envio tradicional do formulário

      // Obtém os valores do select e do input
      var selectValor = document.getElementById("opcao").value;
      var inputValor = document.getElementById("teste").value;

      // Codifica o texto do input para evitar problemas com caracteres especiais
      var inputValorEncoded = encodeURIComponent(inputValor);

      // Redireciona para a URL no formato desejado
      window.location.href = "index.php?" + selectValor + "=" + inputValorEncoded;
    });
  </script>
  <!-- ========= Verifica Alerta =========  -->
  <script src="assets/js/alerts.js"></script>
  <?php include_once('alerts.php'); ?>
  <!-- ========= Fim - Verifica Alerta =========  -->

  <!-- Script do Bootstrap (CDN) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>