<?php 

/* Desenvolvido por Fernando José
    Aplicação com APi VIA CEP   */
    // Chamando o script de consulta
	include_once ('consultaocep.php');
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consulta CEP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="." method="POST">
		<p>Consulta CEP</p>
		<input type="text" name="cep" placeholder="Digite o CEP" required value='<?php echo $endereco->cep?>'>
		<input type="submit" name="btn" value="Buscar">
		<input type="text" name="logradouro" placeholder="Logradouro" value='<?php echo $endereco->logradouro?>'>
		<input type="text" name="Complemento" placeholder="Complemento" value='<?php echo $endereco->complemento?>'>
		<input type="text" name="bairro" placeholder="Bairro" value='<?php echo $endereco->bairro?>'>
		<input type="text" name="localidade" placeholder="Localidade" value='<?php echo $endereco->localidade?>'>
		<input type="text" name="uf" placeholder="UF" value='<?php echo $endereco->uf?>'>
		<input type="text" name="ibge" placeholder="IBGE" value='<?php echo $endereco->ibge?>'>
		<input type="text" name="gia" placeholder="GIA" value='<?php echo $endereco->gia?>'>
		<input type="text" name="ddd" placeholder="DDD" value='<?php echo $endereco->ddd?>'>
		<input type="text" name="siafi" placeholder="SIAFI" value='<?php echo $endereco->siafi?>'>
	</form>

</body>
</html>