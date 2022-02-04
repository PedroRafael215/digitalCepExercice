<?php
require_once "vendor/autoload.php";

use \pedro\buscacep\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('01001000');

print_r($resultado);