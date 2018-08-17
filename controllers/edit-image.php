<?php
	if (isset($_POST)) {
		echo "RUN";
		$image = "tmp/images/".$_GET['img'];
		if (file_exists($image)) {
			echo "HIT";
			$fileExt = $image;
			$dir = "tmp/images/";
			$newName = $dir.$_POST['fileName'].$fileExt;
			rename($image, $newName);

			
		}

	}
	