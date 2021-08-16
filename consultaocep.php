<?php 

/* Desenvolvido por Fernando José
    Aplicação com APi VIA CEP   */

    $cep = $_POST['cep'];
    $urlApi = "https://viacep.com.br/ws/".$cep."/json/";

    $endereco = json_decode(file_get_contents($urlApi),false);



 ?>
