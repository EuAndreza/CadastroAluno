<?php 
	include('banco.php');
	include('funcoes.php'); 

	$id = $_POST['id'];
	excluir_aluno($conexao, $id);

	header("Location: listarAlunos.php");
	die();
?>