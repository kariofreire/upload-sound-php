<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Code Rocket - SOUND UPLOAD</title>
	<meta charset="utf-8">
	<meta name="author" content="Kário Freire">
	<meta property="og:locale" content="PT-BR">
	<meta property="og:url" content="https://github.com/kariofreire/upload-sound-php">
	<meta property="og:title" content="Code Rocket - SOUND UPLOAD">
	<meta name="description" content="Upload de som com PHP e jQuery">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="view/assets/images/rocket-color.png">
	<link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/assets/css/sound-upload.css">
	<link rel="stylesheet" type="text/css" href="view/assets/css/loading.css">
</head>
<body>

	<div class="col-md-12 containerLoader none" id="loadingSpinner">
		<div class="boxLoaders">
			<div class="centerLoad">
				<div class="loader"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="logo-code-rocket">
					<img class="img-responsive" src="view/assets/images/rocket-color.png" alt="Code Rocket">
					<hr>
				</header>
				<div class="col-md-8 offset-md-2">
					<div class="jumbotron">			
						<div class="col-md-12">
							<input type="file" class="none" id="fileSound">
							<div id="fileSoundIcon" title="Selecione um arquivo em formato .MP3"></div>
						</div>
						<div class="col-md-8 offset-md-2"><hr></div>	
						<div class="col-md-4 offset-md-4">
							<button id="sendData" class="btn btn-block btn-lg" title="Fazer UPLOAD">UPLOAD</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<button data-toggle="modal" class="none" data-target="#popup-success" id="popupsuccess"></button>
	<div class="modal fade" id="popup-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="icon-success"></div>
					<div class="description">Upload feito com Sucesso!</div>
					<hr>
					<div align="right">
						<button type="button" class="btn" data-dismiss="modal">&nbsp;&nbsp;Fechar&nbsp;&nbsp;</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="view/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="view/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="view/assets/js/sound-upload.js"></script>
	<script type="text/javascript" src="view/assets/js/sendSound.js"></script>
</body>
</html>