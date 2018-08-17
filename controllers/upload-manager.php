
<?php
$file = $_FILES['file']['tmp_name'];
$newname = $_FILES['file']['name'];
$dir = 'tmp/images';


if(move_uploaded_file($file, $dir.$newname)){
	 header('Location: insert.php?aviso=true');
}else{
	$erro = $_FILES['file']['error'];
	header("Location: insert.php?aviso=false&erro=$erro");
}



?>
