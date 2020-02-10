<?php 
 // include('cabecalho.php'); 
  include('banco.php'); 
  include('funcoes.php'); 
?>
	<table>
  <thead>
    <tr>
      <!--<th>#</th>-->
      <th>Nome</th>
      <th>Idade</th>
      <th>Matricula</th>
      <!--<th>Opções</th>-->
    </tr>
  </thead>

  <tbody>

    <?php

      if (isset($_GET['query'])){
        $alunos = buscar_alunos($conexao, $_GET['query']);
      }else{
        $alunos = lista_alunos($conexao);  
      }
      foreach ($alunos as $aluno):
    ?>

    <tr>
      <!--<th scope="row" ><?= $aluno['id'] ?></th>-->
      <td><?= $aluno['nome'] ?></td>
      <td><?= $aluno['idade'] ?></td>
      <td><?= $aluno['matricula'] ?></td>
      <td>
        <form action="cadastro.php" method="post" class="navbar-form navbar-left">
          <input type="hidden" name="id" value=<?= $aluno['id']?>>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-edit">editar</button>
        </form>
      	
        <form action="excluir.php" method="post" class="navbar-form">
          <input type="hidden" name="id" value=<?= $aluno['id']?>>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash">excluir</button>
        </form>
      </td>
    </tr>

    <?php
      endforeach 
    ?>
  </tbody>
</table>
