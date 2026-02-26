<?php

/* Desenvolvido por Fernando José
   Aplicação com API VIA CEP */
// Chamando o script de consulta
include_once 'consultaocep.php';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta CEP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="." method="POST">
    <p>Consulta CEP</p>
    <input type="text" name="cep" placeholder="Digite o CEP" required value="<?= e((string) $endereco->cep) ?>">
    <input type="submit" name="btn" value="Buscar">

    <?php if ($erroConsulta !== ''): ?>
        <p class="erro"><?= e($erroConsulta) ?></p>
    <?php endif; ?>

    <input type="text" name="logradouro" placeholder="Logradouro" value="<?= e((string) $endereco->logradouro) ?>" readonly>
    <input type="text" name="complemento" placeholder="Complemento" value="<?= e((string) $endereco->complemento) ?>" readonly>
    <input type="text" name="bairro" placeholder="Bairro" value="<?= e((string) $endereco->bairro) ?>" readonly>
    <input type="text" name="localidade" placeholder="Localidade" value="<?= e((string) $endereco->localidade) ?>" readonly>
    <input type="text" name="uf" placeholder="UF" value="<?= e((string) $endereco->uf) ?>" readonly>
    <input type="text" name="ibge" placeholder="IBGE" value="<?= e((string) $endereco->ibge) ?>" readonly>
    <input type="text" name="gia" placeholder="GIA" value="<?= e((string) $endereco->gia) ?>" readonly>
    <input type="text" name="ddd" placeholder="DDD" value="<?= e((string) $endereco->ddd) ?>" readonly>
    <input type="text" name="siafi" placeholder="SIAFI" value="<?= e((string) $endereco->siafi) ?>" readonly>
</form>

</body>
</html>
