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
    <title>Gerador de Carnê</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      header, footer { padding: 2% 0; text-align: center; }
    </style>
  </head>
  <body>
    <header>
      <h1 class="text-primary">
        Gerador de Carnê
      </h1>
      <small>* Não utilize "aspas" nos campos abaixo.</small><br>
      <small>* Pode utilizar HTML.</small>
    </header>

    <br><hr><br>

    <div class="container">
      <form role="form" action="carne.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <h3>Dados da contratada</h3>
            <div class="form-group">
              <label>Nome</label>
              <input name="nome_empresa" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <textarea name="endereco_empresa" class="form-control" required>Rua x, 000, Centro, Cidade - UF</textarea>
            </div>
            <div class="form-group">
              <label>Telefone</label>
              <input name="tel_empresa" type="text" class="form-control" value="(00) 0000-0000">
            </div>
            <div class="form-group">
              <label>URL do Logotipo <small>* para capa do carnê</small></label>
              <input name="logo" type="text" class="form-control" value="img/logo.svg">
            </div>
            <div class="form-group">
              <label>Observações</label>
              <textarea name="obs" class="form-control">Após vencimento cobrar multa de R$ 2,00 e Juros de 1% ao mês</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <h3>Dados do contratante</h3>
            <div class="form-group">
              <label>Nome Completo</label>
              <input name="nome" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <textarea name="endereco" class="form-control" required>Rua x, 000, Centro, Cidade - UF</textarea>
            </div>
            <div class="form-group">
              <label>CPF / CNPJ</label>
              <input name="cpf" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Valor da Parcela</label>
              <input name="valor" type="text" class="form-control" value="R$ 00,00" required>
            </div>
            <div class="form-group">
              <label>Quantidade de Parcelas</label>
              <input name="qtd" type="number" class="form-control" value="10" max="212" required>
            </div>
            <div class="form-group">
              <label>Dia de Vencimento</label>
              <input name="vence" type="number" class="form-control" value="7" required>
            </div>
            <div class="form-group">
              <label>Primeira Parcela</label>
              <div class="row">
                <div class="col-xs-6">
                  <select name="primeiromes" class="form-control">
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                  </select>
                </div>
                <div class="col-xs-6">
                  <select name="primeiroano" class="form-control">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <br><br>
          <button type="submit" class="btn btn-primary btn-lg">Gerar Carnê</button>
        </div>
      </form>
    </div>

    <br><hr><br>

    <footer>
      <p>Desenvolvido por <a href="http://gmasson.com.br" target="_blank">Gabriel Masson</a></p>
      <p><a href="http://github.com/gmasson/carne" target="_blank">Colabore no Github</a></p>
    </footer>

  </body>
</html>