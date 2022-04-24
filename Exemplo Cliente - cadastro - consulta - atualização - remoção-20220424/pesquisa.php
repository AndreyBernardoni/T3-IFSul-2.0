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
              <td><strong>Id</strong></td>
              <td><strong>Nome</strong></td>
              <td><strong>Email</strong></td>
              <td><strong>Cidade</strong></td>
              <td><strong>UF</strong></td>

            </tr>
            <?php
            //abre a conexão
              $conexao = mysqli_connect("localhost", "root", "", "cliente");
              if (!$conexao){
              	die(mysqli_connect_errno());
              	echo "Ocorreu um erro na conexão com o banco de dados.";
              	exit;
              }

              //recebe o nome do formulário
                $nome   = $_POST["nome"];
                $sql="SELECT * FROM `cliente` where `nome`='$nome'";
                //executa a pesquisa
                $consulta = mysqli_query($conexao,$sql);
                if($consulta)
            		{
            			echo '<div style="color:#F00"> Sucesso ao pesquisar</div><br/><br/>';
            		}else{
            			echo '<div style="color:#F00"> Erro ao pesquisar</div><br/><br/>';
            		}
            	  //acessa os dados pesquisados
                while ($dados=mysqli_fetch_array($consulta))
                {
                  echo '<tr>';
                  echo '  <td>'.$dados["Id"].'</td>';
                  echo '  <td>'.$dados["Nome"].'</td>';
                  echo '  <td>'.$dados["Email"].'</td>';
                  echo '  <td>'.$dados["Cidade"].'</td>';
                  echo '  <td>'.$dados["UF"].'</td>';
                  echo '</tr>';
                }

            ?>
        </table>
        <a href="inicio.html"> <button>Voltar ao início </button></a>
  </body>
</html>
