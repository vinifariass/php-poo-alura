<?php

require 'MeuFiltro.php';

$arquivosCursos = fopen('lista-cursos.txt','r');

stream_filter_register('alura.partes',MeuFiltro::class);

stream_filter_append($arquivosCursosm,'string.toupper');

echo fread($arquivosCursos,filesize('lista-cursos.txt'));