<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php
            //abre a conexão
              $conexao = mysqli_connect("localhost", "root", "", "agenda");
              if (!$conexao){
              	die(mysqli_connect_errno());
              	echo "Ocorreu um erro na conexão com o banco de dados.";
              	exit;
              }

              //recebe o nome do formulário
                $pesquisa   = $_POST["local"];
                $id="";
                $local="";
                $descricao="";
                $hora="";
                $data="";
                $sql="SELECT * FROM `compromisso` where `local`='$pesquisa'";
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
                  $id=$dados["id"];
                  $nome=$dados["data"];
                  $email=$dados["local"];
                  $cidade=$dados["hora"];
                  $uf=$dados["descricao"];
                }
                ?>
                  <form action="altera.php" method="POST">

                    <input type="hidden" name="id"  value="<?php echo $id; ?>" ><br/><br/>
                     Local:<br/>
  	                 <input type="text" name="nome"  value="<?php echo $local; ?>"><br/><br/>
  	                 Descrição:<br/>
  	                 <input type="email" name="email"  value="<?php echo $descricao; ?>"><br/><br/>
  	                 Hora:<br/>
  	                 <input type="text" name="cidade"  value="<?php echo $cihoradade; ?>"><br/><br/>
  	                 Data:<br/>
  	                 <input type="text" name="uf" size="2" value="<?php echo $data; ?>">
  	                 <br/><br/>
  	                 <input type="submit" value="Alterar">
                  </form>
  </body>
</html>
