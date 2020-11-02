<?php
// Usando a cURL com PHP7

$CEP = "83322150";
$link = "https://viacep.com.br/ws/$CEP/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$resposta = curl_exec($ch);

curl_close($ch);

$dados = json_decode($resposta, true);

//print_r($dados);
echo "CEP: ";
print_r($dados["cep"]);
echo "</br>";
echo "Logradouro: ";
print_r($dados["logradouro"]);
echo "</br>";
echo "Complemento: ";
print_r($dados["complemento"]);
echo "</br>";
echo "Bairro: ";
print_r($dados["bairro"]);
echo "</br>";
echo "Cidade: ";
print_r($dados["localidade"]);
echo "</br>";
echo "UF: ";
print_r($dados["uf"]);
echo "</br>";
echo "IBGE: ";
print_r($dados["ibge"]);
echo "</br>";
echo "GIA: ";
print_r($dados["gia"]);
echo "</br>";
echo "DDD: ";
print_r($dados["ddd"]);
echo "</br>";
echo "SIAFI: ";
print_r($dados["siafi"]);

?>
