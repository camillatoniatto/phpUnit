<?php
    use PHPUnit\Framework\TestCase;
    require_once("PhpUnitUnidade.php");

    class PhpUnitUnidadeTeste extends TestCase{
        // 2 - OK
        public function testQuantidadePares(){
            $numeros = [2, 4, 6, 8, 10];
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->QuantidadePares($numeros);
            $this->assertGreaterThan(3, $result);
        }

        // 3 - OK
        public function testValidarOperacoes(){
            $numb1 = 20;
            $numb2 = 5;
            $operador = "+";
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->ValidarOperacoes($numb1, $numb2, $operador);
            $this->assertEquals(25, $result);
        }

        // 4 - OK
        public function testTamanhoString(){
            $value = "joana";
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->TamanhoString($value);
            $this->assertTrue($result);
        }

        // 5
        public function testGerarMilNumeros(){
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->GerarMilNumeros();
            $this->assertCount(1000, $result);
        }

        // 6
        public function testSenhaSha256(){
            $senha = "Senai2022";
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->SenhaSha256($senha);
            $this->assertEquals("881cae19c0e9fc6456fae89462f5157fca0f3fa7d010841a0382f98de9144866", $result);
        }

        // 8
        public function testEstadosBrasileiros(){
            $value = "Tocantins";
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->EstadosBrasileiros($value);
            $this->assertTrue($result);
        }

        // 9
        public function testMegasena(){
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->Megasena();
            $this->assertCount(60, $result);
            foreach($result as $value){
                $this->assertEquals(0, $value);
            }
        }

        // 10
        public function testEnderecoCorreios(){
            $cep = "87010360";
            $phpUnitUnidade = new PhpUnitUnidade();
            $result = $phpUnitUnidade->EnderecoCorreios($cep);
            $this->assertXmlFileEqualsXmlFile($result);
        }
    }
?>