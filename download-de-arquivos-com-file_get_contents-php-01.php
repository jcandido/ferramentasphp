<?php
// Fazendo downloads de arquivos com "file_get_contents"

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
//$link = "https://cenelinfo.com.br/wp-content/uploads/2020/05/cropped-simbolo-logo-fundo-transparente-para-favicon-291x285-1-32x32.png";
$content = file_get_contents($link);

$parse = parse_url($link);
//print_r($parse);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+"); // Aqui gera o nome do arquivo para download

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">

