<?php

require_once 'vendor/autoload.php';
require_once 'src/Buscador.php';

use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=> 'https://www.alura.com.br/']);



$buscador = new Buscador($client, $crawler);
$crawler = new Crawler(); 

$cursos = $buscador->buscar('/curso-online-php-primeiros-passos');

foreach($cursos as $curso){
  echo $curso . PHP_EOL;
  
}