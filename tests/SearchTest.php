<?php

use PHPUnit\Framework\TestCase;
use Lucas\Projeto_php_avancado\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testgetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $busca = new Search;
        $resultado = $busca->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Vila Buenos Aires" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luíz Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}
