<?php

require_once "vendor/autoload.php";

use rafaelq80\digitalcep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('03360000');

print_r($resultado);