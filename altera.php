<?php
$conexao = mysqli_connect("localhost", "root", "", "agenda");

if (!$conexao) {
	die(mysqli_connect_errno());
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}

if (isset($_POST["id"]) && isset($_POST["local"]) && isset($_POST["data"]) && isset($_POST["hora"])) {

	$id = $_POST["id"];
	$local   = $_POST["local"];
	$data  = $_POST["data"];
	$hora = $_POST["hora"];
	$descricao = $_POST["descricao"];
	$sql = "UPDATE `compromisso` SET `local`='$local', `data`='$data', `hora`='$hora', `descricao`='$descricao' WHERE `id`= '$id'";
	$executa = mysqli_query($conexao, $sql);
	if ($executa) {
		echo "<div style='color:#F00'> Sucesso ao atualizar</div><br/><br/>";
	} else {
		echo "<div style='color:#F00'> Erro ao atualizar</div><br/><br/>";
	}
	echo "<a href='index.php'>Voltar ao início</a>";
}
