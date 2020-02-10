<?php  
	include('banco.php');
	include('funcoes.php'); 

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$matricula = $_POST['matricula'];

	$resultado = '';

	error_log('ID => '.$id);
	if ($id == '' ){
		$resultado = inserir_aluno($conexao, $nome, $idade, $matricula);
	}else{
			$resultado = editar_aluno($conexao, $id, $nome, $idade, $matricula);
		}
		
	

	header("Location: listarAlunos.php");
	die();

?>

