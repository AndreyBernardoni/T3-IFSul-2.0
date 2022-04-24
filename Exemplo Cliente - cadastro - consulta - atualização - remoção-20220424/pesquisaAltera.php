<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php
            //abre a conexão
              $conexao = mysqli_connect("localhost", "root", "", "cliente");
              if (!$conexao){
              	die(mysqli_connect_errno());
              	echo "Ocorreu um erro na conexão com o banco de dados.";
              	exit;
              }

              //recebe o nome do formulário
                $pesquisa   = $_POST["nome"];
                $id="";
                $nome="";
                $email="";
                $cidade="";
                $uf="";
                $sql="SELECT * FROM `cliente` where `nome`='$pesquisa'";
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
                  $id=$dados["Id"];
                  $nome=$dados["Nome"];
                  $email=$dados["Email"];
                  $cidade=$dados["Cidade"];
                  $uf=$dados["UF"];
                }
                ?>
                  <form action="altera.php" method="POST">

                    <input type="hidden" name="id"  value="<?php echo $id; ?>" ><br/><br/>
                     Nome:<br/>
  	                 <input type="text" name="nome"  value="<?php echo $nome; ?>"><br/><br/>
  	                 E-mail:<br/>
  	                 <input type="email" name="email"  value="<?php echo $email; ?>"><br/><br/>
  	                 Cidade:<br/>
  	                 <input type="text" name="cidade"  value="<?php echo $cidade; ?>"><br/><br/>
  	                 UF:<br/>
  	                 <input type="text" name="uf" size="2" value="<?php echo $uf; ?>">
  	                 <br/><br/>
  	                 <input type="submit" value="Alterar">
                  </form>
  </body>
</html>
