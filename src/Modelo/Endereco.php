<?php

namespace  Alura\Banco\Modelo;
/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $rua
 * @property-read string $numero
 * @property-read string $bairro

 */
final class Endereco
{
    use AcessoPropriedades;

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

  public function __toString(): string {
      return "{$this->rua},{$this->numero},{$this->bairro},{$this->cidade}";
  }

  public function __set(string $nomeAtributo, $value): void
  {
      // TODO: Implement __set() method.
  }
}