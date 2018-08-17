
<div class="row">
	
<?php

//Abre o diretório e um array de arquivos desde que a extensão seja {jpg,gif,png,jpeg}
$dirname = "tmp/images/";
$images = glob($dirname."*.{jpg,gif,png,jpeg}", GLOB_BRACE);


foreach($images as $image) {
    MakeCard($image);
}

?>
</div>

<?php 
 function MakeCard($file)
{ 	$fileName = str_replace("tmp/images/", "", $file);

	?>
	<div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo($file)?>">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <p><b>Arquivo: <?php echo $fileName;?></b></p>
          <p>Editado em <?php echo  date( 'd/m/y - h:i A',filemtime($file));?></p>
        </div>
        <div class="card-action">
          <a href="#modalEdit<?php echo $fileName;?>" class="right-align modal-trigger">Editar</a>
          <a href="#modalExclude<?php echo $fileName;?>" class="left-align modal-trigger">Excluir</a>
        </div>
      </div>
    </div>

    <div id="modalEdit<?php echo $fileName;?>" class="modal">
    <div class="modal-content">
      <h4>Editar Imagem</h4>
      <form action="controllers/edit-image.php?img=<?php echo $fileName?>" method="POST" class="col s12">
      	        <div class="input-field col s12">
          			<input id="fileName" type="text" class="validate" name="fileName" 
          			<?php 
          				$noExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
          				echo "value='".$noExt."'";
          			?>
          			>
          			<label for="fileName">Nome do Arquivo</label>
          		</div>

          		<div class="col s12 center-align big-padding">
					<input type="submit" name="submit" value="Salvar" href="" class="btn waves-effect waves-green center-align">
				</div>
        		
      </form>
    </div>
 </div>

 <div id="modalExclude<?php echo $fileName;?>" class="modal">
    <div class="modal-content">
      <h4>Excluir Imagem</h4>
      <form action="/controllers/exclude-image.php?img=<?php echo $fileName?>" method="POST" class="col s12">
      	        <div class="input-field col s12">
      	        	<div class="row container">
      	        		<p>Essa ação não poderá ser desfeita.Tem certeza que deseja excluir a imagem?</p>
      	        	</div>
          		</div>

      </form>
    </div>
    <div class="modal-footer">
      <input type="submit" name="submit" value="Excluir" class="modal-close waves-effect waves-green btn-flat">     
      <a href="" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
 </div>

    <?php
}