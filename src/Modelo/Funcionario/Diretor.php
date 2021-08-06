<?php

namespace  Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
   public function calculaBonificacao(): float{
    return $this->recuperaSalario() * 2;
  }

  public function podeAutentificar(string $senha): bool {
    return $senha === '1234';
  }
}