
<?php
	$header = 'Edição de Arquivo';
	$sub = 'Edição de arquivo no servidor Apache';
	session_start();
	
	include_once 'templates/header.php';
?>

 <div class="row  grey darken-4 big-padding">
  	 <div class="row">
	  	<div class="col m12 center-align">
	  		<h4 class="grey-text text-lighten-4">Editar arquivo</h4>
	  	</div>
  	 </div>
  
  	<div class="row">
	<div class="col-md-12 text-center">
		<form action="controllers/upload-manager.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<label for="fileSelect">Nome do arquivo:</label>
		</div>
        
		<div class="col-md-8">
			<input type="hidden" name="MAX_FILE_SIZE" value="50000" />
			<input type="file" name="photo" id="fileSelect" >
		</div>
        
		
		<div class="col-md-4">
			<input type="submit" name="submit" value="Upload" class="btn btn-sm animated-button thar-one">
		</div>
        

        <p>Tamanho máx: 5mb por arquivo.</p>
    </form>
</div>
</div>
</div>
 <?php
 	include_once 'templates/footer.php';
   ?>