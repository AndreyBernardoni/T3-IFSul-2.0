<?php
$conexao = mysqli_connect("localhost", "root", "", "agenda");

if (!$conexao){
	die(mysqli_connect_errno());
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}

if(isset($_POST[";;"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"]))
{
		//recebendo os dados os formulário
    $id= $_POST["id"];
    $nome   = $_POST["nome"];
		$email  = $_POST["email"];
		$cidade = $_POST["cidade"];
		$uf     = $_POST["uf"];
    $sql="UPDATE `cliente` SET `nome`='$nome', `email`='$email', `cidade`='$cidade', `uf`='$uf' WHERE `id`= '$id'";
		$executa= mysqli_query($conexao,$sql);
    if($executa)
		{
			echo "<div style='color:#F00'> Sucesso ao atualizar</div><br/><br/>";
		}else{
			echo "<div style='color:#F00'> Erro ao atualizar</div><br/><br/>";
		}
		echo "<a href='inicio.html'>Voltar ao início</a>";
	}
	?>
