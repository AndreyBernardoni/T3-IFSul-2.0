<?php
$conexao = mysqli_connect("localhost", "root","", "cliente");
if (!$conexao){
	die(mysqli_connect_errno());
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
	//recebendo os dados os formulário
		$nome   = $_POST["nome"];
		$email  = $_POST["email"];
		$cidade = $_POST["cidade"];
		$uf     = $_POST["uf"];
		$sql="INSERT INTO `cliente` (`nome`,`email`,`cidade`,`UF`) VALUES ('$nome','$email','$cidade','$uf')";
		$executa= mysqli_query($conexao,$sql);
		if($executa)
		{
			echo "<div style='color:#F00'> Sucesso ao cadastrar</div><br/><br/>";
		}else{
			echo "<div style='color:#F00'> Erro ao cadastrar</div><br/><br/>";
		}

		echo "<a href='inicio.html'>Voltar ao início</a>";

?>
