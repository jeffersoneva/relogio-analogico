<?php
    //Definindo a configuração de caracteres
	header('Content-type: text/html; charset=utf-8');

	//Define Local e Timezone
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
?>
<!doctype html>
<html lang="pt-br">

	<head>

        <meta charset="UTF-8" />
        
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
        <meta name="author" content="Agremak, Jefferson Eva (CEO)" />
        <meta name="robots" content="index, follow">

		<meta name="theme-color" content="#2274A5">
		<meta name="apple-mobile-web-app-status-bar-style" content="#2274A5">
		<meta name="msapplication-navbutton-color" content="#2274A5">

        <link rel="preload" href="css/estilo.css" as="style">
        <link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" as="script">
        <link rel="preload" href="js/relogio.js" as="script">
		
		<link rel="stylesheet" href="css/estilo.css">

        <link rel="icon" href="https://www.agremak.com/img/favicons/favicon-16.png" sizes="16x16">
		<link rel="icon" href="https://www.agremak.com/img/favicons/favicon-32.png" sizes="32x32">
		<link rel="icon" href="https://www.agremak.com/img/favicons/favicon-64.png" sizes="64x64">

        <title>Relógio Analógico - by Agremak</title>
        
    </head>

    <body onselectstart="return false">

        <div class="relogio">
            <img src="img/relogio.png" alt="pontos-relogio"/>
            <?php include_once "funcoes/hora_exata.php"; ?>
        </div>

        <div class="footer">
            <a href="https://www.agremak.com" target="_blank">agremak.com</a> <?php echo date("Y"); ?>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
	    <script src="js/relogio.js" type="text/javascript"></script>
    </body>

</html>