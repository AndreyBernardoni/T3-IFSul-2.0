<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <br>
    <br>
    <table width="400px" border="1" cellspacing="1">
        <tr>
            <td><strong>Local</strong></td>
            <td><strong>Hora</strong></td>
            <td><strong>Data</strong></td>
            <td><strong>Descrição</strong></td>
        </tr>

        <?php
        $conexao = mysqli_connect("localhost", "root", "", "agenda");
        if (!$conexao) {
            die(mysqli_connect_errno());
            echo "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }
        $local   = $_POST["local"];
        $sql = "SELECT * FROM `compromisso` where `local`='$local'";
        $consulta = mysqli_query($conexao, $sql);
        if ($consulta) {
            echo '<div style="color:#F00"> Sucesso ao pesquisar</div><br/><br/>';
        } else {
            echo '<div style="color:#F00"> Erro ao pesquisar</div><br/><br/>';
        }
        while ($dados = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '  <td>' . $dados["data"] . '</td>';
            echo '  <td>' . $dados["local"] . '</td>';
            echo '  <td>' . $dados["hora"] . '</td>';
            echo '  <td>' . $dados["descricao"] . '</td>';
            echo '</tr>';
        }

        ?>
    </table>
    <a href="index.php"> <button>Voltar ao início </button></a>
</body>

</html>