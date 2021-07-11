<?php
//criamos o arquivo
$arquivo = fopen('lista.txt','a');
//verificamos se foi criado
if ($arquivo == false) die('Não foi possível criar o arquivo.');
//escrevemos no arquivo
$texto = $Email;
fwrite($arquivo, $texto);
//Fechamos o arquivo após escrever nele
fclose($arquivo);
?>