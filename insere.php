<?php
$conexao = mysqli_connect("localhost", "root","", "agenda");
if (!$conexao){
	die(mysqli_connect_errno());
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
		$hora   = $_POST["hora"];
		$data  = $_POST["data"];
		$descricao = $_POST["descricao"];
		$local     = $_POST["local"];
		$sql="INSERT INTO `compromisso` (`data`,`local`,`hora`,`descricao`) VALUES ('$data','$local','$hora','$descricao')";
		$executa= mysqli_query($conexao,$sql);
		if($executa)
		{
			echo "<div style='color:#F00'> Sucesso ao cadastrar</div><br/><br/>";
		}else{
			echo "<div style='color:#F00'> Erro ao cadastrar</div><br/><br/>";
		}

		echo "<a href='index.php'>Voltar ao início</a>";

?>
