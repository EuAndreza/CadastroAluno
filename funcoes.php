<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function lista_alunos($conexao){
	$alunos = array();
    $resultado = mysqli_query($conexao, "select * from alunos");
    while($aluno = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $aluno);
    }
    return $alunos;
}

function buscar_alunos($conexao,$nome){
	$alunos = array();
    $resultado = mysqli_query($conexao, "select * from alunos  where nome like '%$nome%'");
    while($aluno = mysqli_fetch_assoc($resultado)) {
        array_push($alunos, $aluno);
    }
    return $alunos;
}


function buscar_aluno($conexao, $id){
    $resultado = mysqli_query($conexao, "select * from alunos  where id = $id");
    $aluno = mysqli_fetch_assoc($resultado);
    return $aluno;
    
}


function inserir_aluno($conexao, $nome, $idade, $matricula){
	$query = "insert into alunos (nome,idade,matricula) values ('$nome', $idade, '$matricula' );";
	$salvou = mysqli_query($conexao, $query);
    return $salvou;
	
}

function excluir_aluno($conexao, $id){
	$query = "delete from  alunos where id = $id;";
	$excluiu = mysqli_query($conexao, $query);
	return $excluiu;
}
	
function editar_aluno($conexao,$id, $nome, $idade, $matricula){
	$query = "update alunos set nome = '$nome', idade= '$idade' , matricula = '$matricula' where id = $id;";
	$salvou = mysqli_query($conexao, $query);
    return $salvou;
}
?>