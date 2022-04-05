<?php

class MeuFiltro extends php_user_filter

{
  public $stream;
  public function onCreate()
  {
    $this->stream = fopen('php://temp', 'w+'); // quando o filtro é criado
    return $this->stream !== false;
  }

  public function onClose()
  {
    parent::onClose(); // quando o filtro é feacho
  }

  public function filter($in, $out, &$consumed, $closing)
  {
    $saida = '';
    while ($bucket = stream_bucket_make_writeable($in)) {
      $linhas = explode("\n", $bucket->data);

      foreach ($linhas as $linha) {
        if (stripos($linha, 'parte') !== false) {
          $saida .= "$linha\n";
        }
      }
    }

    $bucketSaida = stream_bucket_new($this->stream, $saida);
    stream_bucket_append($out, $bucketSaida);

    return PSFS_PASS_ON;
  }
}
