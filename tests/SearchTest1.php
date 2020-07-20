<?php

use PHPUnit\Framework\TestCase;

use rafaelq80\digitalcep\Search;

class SearchTest1 extends TestCase
{

    public function testgetAddressFromZipcodeDefaultUsage()
    {

        $resultado = new Search;

        $resultado = $resultado->getAddressFromZipcode('03360000');

        $esperado = [

            "cep" => "03360-000",
            "logradouro" => "Rua Angá",
            "complemento" => "",
            "bairro" => "Vila Formosa",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "unidade" => "",
            "ibge" => "3550308",
            "gia" => "1004"

        ];

        $this->assertEquals($esperado, $resultado);

        //$this->assertEquals("OK", $resultado);
    }
}