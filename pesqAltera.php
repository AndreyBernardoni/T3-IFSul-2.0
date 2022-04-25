<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  $conexao = mysqli_connect("localhost", "root", "", "agenda");
  if (!$conexao) {
    die(mysqli_connect_errno());
    echo "Ocorreu um erro na conexão com o banco de dados.";
    exit;
  }


  $pesquisa   = $_POST["id"];
  $id = "";
  $local = "";
  $descricao = "";
  $hora = "";
  $data = "";
  $sql = "SELECT * FROM `compromisso` where `id`='$pesquisa'";
  $consulta = mysqli_query($conexao, $sql);
  if ($consulta) {
    echo '<div style="color:#F00"> Sucesso ao pesquisar</div><br/><br/>';
  } else {
    echo '<div style="color:#F00"> Erro ao pesquisar</div><br/><br/>';
  }

  while ($dados = mysqli_fetch_array($consulta)) {
    $id = $dados["id"];
    $data = $dados["data"];
    $local = $dados["local"];
    $hora = $dados["hora"];
    $descricao = $dados["descricao"];
  }
  ?>
  <form action="altera.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $id ?>"><br /><br />
    Local:<br />
    <input type="text" name="local" value="<?php echo $local ?>"><br /><br />
    Descrição:<br />
    <input type="text" name="descricao" value="<?php echo $descricao ?>"><br /><br />
    Hora:<br />
    <input type="time" name="hora" value="<?php echo $hora ?>"><br /><br />
    Data:<br />
    <input type="date" name="data" value="<?php echo $data ?>">
    <br /><br />
    <input type="submit" value="Alterar">
  </form>
</body>

</html>