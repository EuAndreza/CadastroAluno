<?php 
	include('banco.php');
	include('funcoes.php'); 

	
	editar_aluno($conexao, $nome, $idade, $matricula);

	header("Location: listarAlunos.php");
	die();
?>