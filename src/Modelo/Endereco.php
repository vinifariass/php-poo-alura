<?php

namespace  Alura\Banco\Modelo;

class Endereco 
{
  private  $cidade;
  private  $bairro;
  private  $rua;
  private  $numero;

  public function __construct($cidade, $bairro, $rua,$numero) {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;

  }

  public  function getCidade() {
    return $this->cidade;
  }

  public function getBairro() {
    return $this->bairro;
  }

  public function getRua() {
    return $this->rua;
  }

  public function getNumero() {
    return $this->numero;
  }

}