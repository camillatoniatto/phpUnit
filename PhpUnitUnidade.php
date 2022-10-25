<?php
    class PhpUnitUnidade{

        public $array = Array(1, 2, 3, 4, 5, 6);
        public $imposto = 105415;

        /* 2 – Programe um método que receba 5 números em um array, o método irá verificar a
        quantidade de números pares. Na classe de teste valide para que o retorno tenha mais
        de 3 números pares.
        Objetivo: testar se a função está contando corretamente os números pares.*/
        public function QuantidadePares($numeros){
            $array = $this->array = Array();
            $result = 0;
            foreach ($numeros as $number){
                if($number % 2 == 0){
                    $result++;
                }
            }
            return $result;
        }

        /*3 – Programe um método que recebe 2 números e mais um operador matemático
        dentre as 4 operaçõs básicas, o método irá calcular o resultado de acordo com os
        parametros. Na classe de teste valide para saber o método está calculando
        corretamente as 4 operações.
        Objetivo: testar se o método é capaz de calcular as 4 operações básicas da matemática. */
        public function ValidarOperacoes(int $numb1, int $numb2, string $operador){
            $result = 0;
            switch ($operador) {
                case "+":
                    $result = $numb1 + $numb2;
                    break;
                case "-":
                    $result = $numb1 - $numb2;
                    break;
                case "/":
                    $result = $numb1 / $numb2;
                    break;
                case "*":
                    $result = $numb1 * $numb2;
                    break;
            }
            return $result;
        }

        /*4 – Programe um método que verifica se uma string recebida possui pelo menos 5
        caracteres. Na classe de teste valide para saber se o método está fazendo a validação
        corretamente.
        Objetivo: testar se a função é capaz de validar a quantidade de caracteres mínima
        exigida. */
        public function TamanhoString(string $value){
            $result = false;
            if (strlen($value) > 4){
                $result = true;
            }
            return $result;
        }

        /* 5 – Programe um método que gere mil números do 0 ao 999. Na classe de teste valide
        para assegurarmos que o método realmente está gerando os números.
        Objetivo: testar se o método é capaz de gerar os 1000 números solicitados.*/
        public function GerarMilNumeros(){
            $list = array();
            for ($i = 0; $i <= 999; $i++) {
                array_push($list, $i);
            }
            return $list;
        }

        /*6 – Um usuário: Senai com senha Senai2022 está tentando logar no sistema, o pessoal
        do suporte chamou você para programar uma função que valide esse usuário.
        O sha256 da senha desse usuário corresponde a seguinte String:
        881cae19c0e9fc6456fae89462f5157fca0f3fa7d010841a0382f98de9144866
        Programe o método que valide se a senha digitada pelo usuário correspondente ao
        sha256 mencionado, na classe de teste passe o usuário e o sha256 como parâmetro.
        Objetivo: testar se o método converte a senha digitada Senai2022 para sha256 e valide
        se o usuário e a senha estão corretos. */
        public function SenhaSha256($senha){
            $hash = hash('sha256', $senha);
            return $hash;
         }

        /*7 – Programe um método que calcule o imposto de renda de acordo com o valor
        informado na classe de teste.
        Objetivo: testar se o método faz o cálculo corretamente do imposto de renda. */
        public function ImpostoDeRenda(int $imposto){
           $result = 0;
            if ($imposto <= 190398){

            }
            else if ($imposto >= 190399 && $imposto <= 282665){

            }
            else if ($imposto >= 282666 && $imposto <= 375105){

            }
            else if ($imposto > 466468){

            }
        }

        /*8 – Utilizando o array abaixo programe uma função que valide se o valor recebido da
        classe de teste corresponde a um estado brasileiro.

        Objetivo: testar se o método é capaz de validar informações contidas em um array.
        $estados = array(
        1 => 'Acre',
        2 => 'Alagoas',
        3 => 'Amapa',
        4 => 'Amazonas',
        5 => 'Bahia',
        6 => 'Ceara',
        7 => 'Distrito Federal',
        8 => 'Espirito Santo',
        9 => 'Goias',
        10 => 'Maranhão',
        11 => 'Mato Grosso',
        12 => 'Mato Grosso do Sul',
        13 => 'Minas Gerais',
        14 => 'Pará',
        15 => 'Paraná',
        16 => 'Paraiba',
        17 => 'Pernambuco',
        18 => 'Piauí',
        19 => 'Rio de Janeiro',
        20 => 'Rio Grande do Norte',
        21 => 'Rio Grande do Sul',
        22 => 'Rondonia',
        23 => 'Santa Catarina',
        24 => 'São Paulo',
        25 => 'Sergipe',
        26 => 'Tocantins',
        ); */

        public function EstadosBrasileiros($value){
            $estados = array(
                1 => 'Acre',
                2 => 'Alagoas',
                3 => 'Amapa',
                4 => 'Amazonas',
                5 => 'Bahia',
                6 => 'Ceara',
                7 => 'Distrito Federal',
                8 => 'Espirito Santo',
                9 => 'Goias',
                10 => 'Maranhão',
                11 => 'Mato Grosso',
                12 => 'Mato Grosso do Sul',
                13 => 'Minas Gerais',
                14 => 'Pará',
                15 => 'Paraná',
                16 => 'Paraiba',
                17 => 'Pernambuco',
                18 => 'Piauí',
                19 => 'Rio de Janeiro',
                20 => 'Rio Grande do Norte',
                21 => 'Rio Grande do Sul',
                22 => 'Rondonia',
                23 => 'Santa Catarina',
                24 => 'São Paulo',
                25 => 'Sergipe',
                26 => 'Tocantins');
            $isMatch = false;
            foreach ($estados as $estado){
                if($value == estado){
                    $isMatch = true;
                }
            }
            return $isMatch;
        }
        /*9 – Programe um método que sorteie 60 números para preencher uma cartela de mega
        sena, na classe de teste verifique se o array retornado contem realmente em todas as
        posições somente números inteiros.
        Objetivo: validar se o método está retornando somente números validos para preencher
        uma cartela da mega sena.*/
        public function Megasena(){
            $list = array();
            while ($list.count() <= 60):
                $number = rand(0, 1);
                if($number % 2 == 0){
                    array_push($list, $number);
                }
            endwhile;
            return $list;
        }
        /*10 – Programe um método que faça uma requisição na Api via cep dos correios, na classe
        de teste verifique se o método está retornando todos os dados de endereço
        corretamente de acordo com o cep enviado para a API.
        Use a biblioteca Guzzle HTTP Client para a requisição.
        Objetivo: testar se o método que faz o request na Api via cep está funcionando
        corretamente. */
        function EnderecoCorreios($cep){
            // formatar o cep removendo caracteres nao numericos
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $url = "http://viacep.com.br/ws/$cep/xml/";
            $xml = simplexml_load_file($url);
            return $xml;
        }
    }
?>