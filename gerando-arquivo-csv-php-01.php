<?php
// Gerando arquivo no formato CSV com PHP7

//require_once("config.php");
$arquivo = array(["1 jcandido seila fim"], ["2 mirian candido agora fim"], ["3 daniela candido amanha fim"]);
//$sql = new Sql();
//echo $Sql;
//$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$usuarios = $arquivo;
//echo $usuarios;

$headers = array();

//foreach ($usuarios[0] as $key => $value) {
//    array_push($headers, ucfirst($key));
//}

foreach ($usuarios[0] as $key => $value) {
    array_push($headers);
}


$file = fopen("usuarios.csv", "w+"); // Se o arquivo não existir ele será criado

fwrite($file, implode(",", $headers) . "\r\n");

foreach($usuarios as $row) {
    $data = array();
    foreach($usuarios as $key => $row) {
        array_push($data, $value);

    } // End foreach de coluna

fwrite($file, implode(",", $data). "\r\n");

} // End foreach de linha

fclose($file);


echo implode(",", $usuarios); // I "implode" separa cada dado do arquivo com uma ","


//print_r($usuarios);

?>
