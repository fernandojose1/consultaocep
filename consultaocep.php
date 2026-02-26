<?php

/* Desenvolvido por Fernando José
   Aplicação com API VIA CEP */

$endereco = (object) [
    'cep' => '',
    'logradouro' => '',
    'complemento' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => '',
    'ibge' => '',
    'gia' => '',
    'ddd' => '',
    'siafi' => '',
];

$erroConsulta = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cepInformado = $_POST['cep'] ?? '';
    $cep = preg_replace('/\D/', '', $cepInformado);

    if (strlen($cep) !== 8) {
        $erroConsulta = 'CEP inválido. Digite 8 números.';
    } else {
        $urlApi = "https://viacep.com.br/ws/{$cep}/json/";
        $contexto = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => 5,
            ],
        ]);

        $respostaApi = @file_get_contents($urlApi, false, $contexto);

        if ($respostaApi === false) {
            $erroConsulta = 'Não foi possível consultar o CEP no momento.';
        } else {
            $dadosApi = json_decode($respostaApi, false);

            if (json_last_error() !== JSON_ERROR_NONE || ($dadosApi->erro ?? false) === true) {
                $erroConsulta = 'CEP não encontrado.';
            } else {
                $endereco = (object) array_merge((array) $endereco, (array) $dadosApi);
            }
        }
    }
}
