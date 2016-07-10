<?php

if (!$_GET['endereco']) { $endereco_empresa = ""; } else { $endereco_empresa = addslashes($_GET['endereco']); }
if (!$_GET['tel']) { $tel_empresa = ""; } else { $tel_empresa = addslashes($_GET['tel']); }
if (!$_GET['logo']) { $logo = ""; } else { $logo = addslashes($_GET['logo']); }

?>
<!DOCTYPE HTML>
<!-- SPACES 2 -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="Resource-type" content="document">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="author" content="Gabriel Masson">
    <title>Capa do Carnê</title>
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div class="bto">
    Ao Imprimir o carnê certifique-se se a impressão está ajustada à página
    <br>
    <br>
    <button class="btn-impress" onclick="window.print()">Imprimir</button>
  </div>

  <div class="capa">
    <div class="grid">
      <div class="col6 text-center">
        <img src="<?php echo "$logo"; ?>">
      </div>
      <div class="col6">
        <h1>Carnê de Pagamento</h1>
        <p><?php echo "$endereco_empresa <br> <strong> $tel_empresa </strong>"; ?></p>
      </div>
    </div>
  </div>

  </body>
</html>