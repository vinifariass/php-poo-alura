<?php

namespace App\Alura;

class Usuario
{
  private $nome;
  private $sobrenome;
  private $senha;
  private $tratamento;

  public function __construct(string $nome, string $senha, string $genero)
  {
    $this->setNomeSobrenome($nome);
    $this->senha = $senha;
    $this->validaSenha($senha);
    $this->adicionaTratamentoSobrenome($nome,$genero);
  }

  private function adicionaTratamentoSobrenome(string $nome, string $genero)
  {
    if ($genero === "M") {
      $this->tratamento = preg_replace("/^(\w+)\b/", 'Sr.', $nome,1);
    }

    if ($genero === "F") {
      $this->tratamento =  preg_replace("/^(\w+)\b/", 'Sra.', $nome,1);
    }
  }

  private function setNomeSobrenome(string $nome)
  {
    $nomeSobrenome = explode(" ", $nome, 2);

    if ($nomeSobrenome[0] === "") {
      $this->nome = "Nome inválido";
    } else {
      $this->nome = $nomeSobrenome[0];
    }
    if ($nomeSobrenome[1] === null) {
      $this->sobrenome = "Sobrenome inválido";
    } else {
      $this->sobrenome = $nomeSobrenome[1];
    }
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getSobrenome(): string
  {
    return $this->sobrenome;
  }

  public function getSenha(): string
  {
    return $this->senha;
  }

  public function validaSenha(string $senha): void
  {
    $tamanhoSenha = strlen($senha);

    if ($tamanhoSenha > 6) {
      $this->senha = $senha;
    } else {
      $this->senha = "Senha Inválida";
    }
  }

  public function getTratamento(): string
  {
    return $this->tratamento;
  }
}
