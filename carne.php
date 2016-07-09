<?php

if (!$_POST['nome_empresa']) { $nome_empresa = ""; } else { $nome_empresa = addslashes($_POST['nome_empresa']); }
if (!$_POST['endereco_empresa']) { $endereco_empresa = ""; } else { $endereco_empresa = addslashes($_POST['endereco_empresa']); }
if (!$_POST['tel_empresa']) { $tel_empresa = ""; } else { $tel_empresa = addslashes($_POST['tel_empresa']); }
if (!$_POST['logo']) { $logo = ""; } else { $logo = addslashes($_POST['logo']); }
if (!$_POST['obs']) { $obs = ""; } else { $obs = addslashes($_POST['obs']); }

if (!$_POST['nome']) { $nome = ""; } else { $nome = addslashes($_POST['nome']); }
if (!$_POST['endereco']) { $endereco = ""; } else { $endereco = addslashes($_POST['endereco']); }
if (!$_POST['cpf']) { $cpf = ""; } else { $cpf = addslashes($_POST['cpf']); }
if (!$_POST['valor']) { $valor = ""; } else { $valor = addslashes($_POST['valor']); }
if (!$_POST['qtd']) { $qtd = ""; } else { $qtd = addslashes($_POST['qtd']); }
if (!$_POST['vence']) { $vence = ""; } else { $vence = addslashes($_POST['vence']); }
if (!$_POST['primeiromes']) { $primeiro_mes = ""; } else { $primeiro_mes = addslashes($_POST['primeiromes']); }
if (!$_POST['primeiroano']) { $primeiro_ano = ""; } else { $primeiro_ano = addslashes($_POST['primeiroano']); }

$hoje = date("d/m/Y");

if ($qtd >= 212) { header("Location: index.php?error=qtd_limite") }
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
    <title>Carnê</title>
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div class="bto">
    Ao Imprimir o carnê certifique-se se a impressão está ajustada à página
    <br>
    <br>
    <button onclick="window.print()">IMPRIMIR CARNÊ</button>
    &nbsp;
    <?php echo "<a href=\"capa.php?endereco={$endereco_empresa}&tel={$tel_empresa}&logo={$logo}\" target=\"_blank\">IMPRIMIR CAPA DO CARNE</a>"; ?>
  </div>

<?php

$count = 1;
$ano_vence = $primeiro_ano;
$mes_vence = $primeiro_mes - 1;

while ($count <= $qtd) {

  if ($mes_vence == 12) { 
    $ano_vence = $ano_vence + 1;
    $mes_vence = 1;
  } else {
    $mes_vence++;
  }

  echo "<!-- PARCELA -->
  <div class=\"parcela\">
    <div class=\"grid\">
      <div class=\"col4\">
        <div class=\"destaca\">
          <table width=\"100%\">
            <tr>
              <td>
                <small>Parcela</small>
                <br>{$count} / {$qtd}
              </td>
            </tr>
            <tr>
              <td>
                <small>Vencimento</small>
                <br>{$vence}/{$mes_vence}/{$ano_vence}
              </td>
            </tr>
            <tr>
              <td>
                <small>Observações</small>
                <br><br><br><br>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col8\">
        <table width=\"100%\">
          <tr>
            <td colspan=\"2\">
              <small>Nome do cedente</small>
              <br>{$nome_empresa}
            </td>
            <td>
              <small>Parcela</small>
              <br>{$count} / {$qtd}
            </td>
          </tr>
          <tr>
            <td class=\"text-center\">
              <small>Data do Documento</small>
              <br>{$hoje}
            </td>
            <td class=\"text-center\">
              <small>Tipo de Documento</small>
              <br>Carnê
            </td>
            <td>
              <small>Vencimento</small>
              <br>{$vence}/{$mes_vence}/{$ano_vence}
            </td>
          </tr>
          <tr>
            <td colspan=\"3\">
              <small>Todas as informações deste carnê são de responsabilidade do cedente</small>
              <br>{$obs}
            </td>
          </tr>
        </table>
        <div class=\"nome\">{$nome}, {$cpf}, {$endereco}</div>
      </div>
    </div>
  </div>";

  if (!$count_quebra_pg) { $count_quebra_pg = 0; } // Preenche Variavel
  $count_quebra_pg++; // contagem de loop
  if ($count_quebra_pg == 4) { // Adiciona quebra a cada 4 loops e zera a variavel
    echo "<div class=\"quebra-pagina\"></div>";
    $count_quebra_pg = 0;
  }

  $count++;
}

?>

  </body>
</html>