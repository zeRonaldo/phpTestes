<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<meta charset="utf-8">
	<title><?php echo $header;?></title>
	<!-- Folha Própria-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

 	<!-- CSS Framework: Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- JS Frameworks: JQuery e Materialize -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

            
</head>
<body>

<div class="row grey lighten-3 no-margin">
	<?php
		if ($_SERVER['REQUEST_URI'] != "/fluxo/index.php" ) {
			?>
				<div class="row container">
					<div class="col m12">
						<a href="/fluxo/index.php" class="grey-text text-darken-4 left-align valign-wrapper"><i class="small material-icons">arrow_back</i> Retornar</a>
					</div>
				</div>
			<?php
		}
	?>
	<div class="row ">
		<div class="col m12">
			<h1 class="grey-text text-darken-4 center-align"><?php echo $header;?></h1>
		</div>
	
	</div>
	<div class="row">
		<div class="col m12">
			<h5 class="grey-text text-darken-3 center-align"><?php echo $sub;?></h5>
		</div>
	</div>
</div>
