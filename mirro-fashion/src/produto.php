<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/mobile.css" media="(max-width: 939px)">  
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/produto.css">
	<title>Mirror Fashion</title>
</head>

<body>
	<?php 
	$cabecalho_title = "Produto da Mirro Fashion!";
	include("cabecalho.php"); 
	?>
	<title><?php print $cabecalho_title; ?></title>

	<div class="produto">
		<h1>Fuzzy Cardigan</h1>
		<p>Por apenas R$ 129,00</p>

		<form>
<!--Inicio do fildeset -->
			<fieldset class="cores">
				<legend>Esolha a Cor: </legend>
				<input type="radio" name="cor" value="verde" id="verde" checked>
				<label for="verde">
					<img src="../assets/img/produtos/foto2-verde.png" alt="Verde">
				</label>

				<input type="radio" name="cor" value="rosa" id="rosa">
				<label for="rosa">
					<img src="../assets/img/produtos/foto2-rosa.png" alt="rosa">
				</label>

				<input type="radio" name="cor" value="azul" id="azul">
				<label for="azul">
					<img src="../assets/img/produtos/foto2-azul.png" alt="azul">
				</label>
			</fieldset>
<!--Fim do Fildset e bloco do Submit-->
			<input type="submit" class="comprar" value="Comprar">
		</form>
	</div>

	<?php include("rodape.php"); ?>

</body>