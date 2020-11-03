<?php
// Processamento de imagens GD com PHP7. Exemplo 01.

header("Content-Type: image/png");

$imagem = imagecreate(256, 256);

$preto = imagecolorallocate($imagem, 0, 0,0);
$vermelho = imagecolorallocate($imagem, 255, 0,0);

imagestring($imagem, 5, 60, 120, "Curso de PHP 7", $vermelho);
imagepng($imagem);

imagedestroy($imagem);

?>
