
<?php
	$header = 'Testes de PHP';
	$sub = 'Testes de inserção, edição e exclusão de arquivos em um servidor PHP.';

	include_once 'templates/header.php';
?>

  <!-- Example row of columns -->
  <div class="row  grey darken-4 big-padding">
  	 <div class="row">
	  	<div class="col m12 center-align">
	  		<h4 class="grey-text text-lighten-4">Opções</h4>
	  	</div>
  	 </div>
  
  	<div class="row">
  		<div class="col md4 s4 center-align"><a href="insert.php" class="waves-effect waves-light btn-large  yellow accent-3">Inserção</a></div>
  		<div class="col md4 s4 center-align"><a href="list.php" class="waves-effect waves-light btn-large  yellow accent-3">Listagem</a></div>
  		<div class="col md4 s4 center-align"><a href="edit.php" class="waves-effect waves-light btn-large  yellow accent-3">Edição</a></div>
     </div>
  </div>
  
 


 <?php
 	include_once 'templates/footer.php';
   ?>