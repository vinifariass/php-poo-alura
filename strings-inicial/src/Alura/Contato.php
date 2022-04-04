<?php

namespace App\Alura;


class Contato
{
  private $email;
  private $endereco;
  private $cep;

  public function __construct(string $email, string $endereco, string $cep)
  {

    $this->email = $email;
    if ($this->validaEmail($email) !== false) {
      $this->validaEmail($email);
    } else {
      $this->validaEmail("Email inválido");
    }

    $this->endereco = $endereco;
    $this->cep = $cep;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  public function getUsuario(): string
  {
    $posicaoArroba = strpos($this->email, "@"); // retorna a posicao onde tiver a tstring
    if ($posicaoArroba === false) {
      return "Usuario Inválido";
    }
    return  substr($this->email, 0, $posicaoArroba);
  }

  private function validaEmail(string $email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  public function getEmail(): string
  {
    return $this->email;
  }


  public function getEnderecoCep(): string
  {
    $enderecoCep = [$this->endereco, $this->cep];
    return implode(' - ', $enderecoCep); // funcao que junta uma string com outra
  }
}
