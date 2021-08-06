<?php

$arquivo = fopen('php://temp','w');
try {
    fwrite($arquivo,'Qualquer coisa');
    fclose($arquivo);
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
     fclose($arquivo);
}