<?php

spl_autoload_register(function ($classe) {
  $prefixo = "App\\";

  $diretorio = __DIR__ . '/src/';

  if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
    return;
  };

  $arquivo = $diretorio;

  $namespace = substr($classe, strlen($prefixo));

  $namespaceArquivo = str_replace("\\", DIRECTORY_SEPARATOR, $namespace); //PEGA O SEPARADOR DO SEU DIRETORIO

  $arquivo = $diretorio . $namespaceArquivo . '.php';

  var_dump($arquivo);
  //nome do arquivo completo
});
