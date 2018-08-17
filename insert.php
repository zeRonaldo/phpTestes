
<?php
	$header = 'Inserção de Arquivo';
	$sub = 'Inserção de arquivo no servidor Apache';

	
	include_once 'templates/header.php';
?>

 <div class="row  grey darken-4 big-padding">
  	 <div class="row">
	  	<div class="col m12 center-align">
	  		<h4 class="grey-text text-lighten-4">Subir arquivo</h4>
	  	</div>
  	 </div>
  
  	<div class="row">
	
		<form action="controllers/upload-manager.php" method="post" enctype="multipart/form-data">
		<div class="row container">
			<div class="col s12 center-align">
				 <div class="file-field input-field">
                  <div class="btn">
                    <span>Selecionar Arquivo</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate grey-text text-lighten-2" type="text">
                  </div>
                </div>
			</div>
            
		
			<div class="col s12 center-align">
				<input type="submit" name="submit" value="Upload" class="btn">
			</div>
		</div>
		</form>
        
		<div class="row center-align grey-text text-lighten-2">
        	<p>
        		<?php 
        			if (isset($_GET['aviso'])) {
                        echo "$_GET[aviso]";
        				if ($_GET['aviso']) {
        					echo 'Upload feito com sucesso!!!';
        				}else {
        					$aviso = 'Erro no upload da imagem! Erro:';
        					switch ($_GET['error']) {
        						case '1':
        							$aviso += '1 = O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.';
        							break;
        						case '2':
        							$aviso += '2 = O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.';
        							break;
        						case '3':
        							$aviso += '3 = O upload do arquivo foi feito parcialmente. ';
        							break;
        						case '4':
        							$aviso += '4 =  Nenhum arquivo foi enviado.';
        							break;
        						case '6':
        							$aviso += '6 = Pasta temporária ausênte.';
        							break;
        						case '1':
        							$aviso += '7 = Falha em escrever o arquivo em disco.';
        							break;
        						case '8':
        							$aviso += '8 =Uma extensão do PHP interrompeu o upload do arquivo. O PHP não fornece uma maneira de determinar qual extensão causou a interrupção.';
        							break;
        						default:
        							$aviso+= 'erro não identificado.';
        							break;
        					}
        					echo $aviso;
        				}
        			}
        		?>
        			
        		</p>
		</div>

    </form>
</div>
</div>
 <?php
 	include_once 'templates/footer.php';
   ?>