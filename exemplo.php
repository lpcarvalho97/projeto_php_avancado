<?php

    require_once "vendor/autoload.php";

    use \Lucas\Projeto_php_avancado\Search;

    $busca = new Search;

    $resultado = $busca->getAddressFromZipcode('01001000');

    print_r($resultado);

?>