<?php

function anexarArquivo()
{
    $anexo = '';
    $file = $_FILES['anexo'];
    $error = $file['error'];
    if ($error === UPLOAD_ERR_OK) {
        $size = round($file['size'] / (1024 * 1024), 2);
        if ($size > 3) {
            header('Location: relatos-create.php?tipo=reclamacao&message=Tamanho do arquivo maior que 3 MB!&type=error');
            exit();
        }
        $path = $_SERVER['DOCUMENT_ROOT'] . '..//assets/anexos/';
        $anexo = uniqid() . '-' . $file['name'];
        $tmpName = $file['tmp_name'];
        if (!move_uploaded_file($tmpName, $path . $anexo)) {
            header('Location: relatos-create.php?tipo=reclamacao&message=Erro ao gravar arquivo anexo!&type=error');
            exit();
        }
    }
    return $anexo;
}
