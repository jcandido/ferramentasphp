<! Cria um formulário para selecionar o arquivo e enviar para "upload" !>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Enviar</button>
</form>

<?php
// Upload de arquivos com PHP7

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{ 
    $file = $_FILES["fileUpload"];

    if ($file["error"])
    {
        throw new Exception("Erro: " . $file["error"]);
    }
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]))
    {
        echo "Upload realizado com sucesso!";

    } 
    else 
    {
        throw new Exception("Não foi possível realizar o upload.");
    }
    
    $dirUploads = "uploads";

    if (!is_dir($dirUploads))
    {
        mkdir($dirUploads);
    }
}

?>
