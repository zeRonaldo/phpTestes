
<?php
	$header = 'Listagem de Arquivos';
	$sub = 'Listagem de arquivos no servidor Apache';

	include_once 'templates/header.php';
?>

<div class="row  grey darken-4 big-padding">
  	 <div class="row">
	  	<div class="col m12 center-align">
	  		<h4 class="grey-text text-lighten-4">Arquivos no Servidor</h4>
	  	</div>
	  </div>
	  <div class="row container">
		<?php
 			 include 'controllers/list-files.php';
 		 ?>
	</div>
	</div>
</div>



 <?php
 		include_once 'templates/footer.php';
 ?>