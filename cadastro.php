	<?php 
  //include('cabecalho.php'); 
  include('banco.php'); 
  include('funcoes.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body >

<header class="header">
		<h1 class="tituloCabecalho">Cadastrar Novos Alunos</h1>

		<a href="index.php" class="btn btn-primary btn-lg direita">
				<i class="fas fa-redo"></i> Voltar
			</a>
</header>

	<!--<h1>Cadastrar Novos Alunos</h1>-->

	<?php
		$id = '';
		$nome = '';
		$idade = '';
		$matricula = '';

	if (isset($_POST["id"])){
		error_log('ID === '.$_POST["id"]);
		$aluno = buscar_aluno($conexao, $_POST["id"]);
		if ($aluno){
			$id = $aluno['id'];
			$nome = $aluno['nome'];
			$idade = $aluno['idade'];
			$matricula = $aluno['matricula'];
		}
	}else{
		error_log('Não veio ID');
	}


	?>
	<div class="center">
	<form method="post" action="salvar.php" class="form-horizontal">	
		<!--<label>ID:<?=$id?></label>-->
		<input type="hidden" name="id" value="<?=$id?>">
		<br>
		<div class="form-group mx-sm-5 mb-2 col-sm-5">
			<label for="nome" ><b>Nome do aluno: </b></label><br>
			<input type="text" class=" form-control" id="nome" placehlder="Digte o nome completo..." name="nome" value="<?=$nome?>">
		</div>
		<div class="form-group mx-sm-5 mb-2 col-sm-2">
			<label for="idade" ><b>Idade:</b></label><br>
			<input type="number" class="form-control" id="idade" name="idade" value="<?=$idade?>">
		</div>
		<div class="form-group mx-sm-5 mb-2 col-sm-5">
			<label for="numeroMatricula"><b>Número de matricula: </b></label><br>
			<input type="text" class="form-control" id="numeroMatricula" name="matricula" value="<?=$matricula?>"><br><br>
		</div>
		<center>
			<button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-check"></i>Cadastrar</button>
			<!--<a href="index.php" class="btn btn-primary btn-lg">
				<i class="fas fa-redo"></i> Voltar
			</a>-->
		</center>
	</form>
</div>
	


</body>
</html>



