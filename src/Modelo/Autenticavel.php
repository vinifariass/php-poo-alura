<?php


namespace Alura\Banco\Modelo;


interface Autenticavel
{
    public function podeAutentificar(string $senha): bool;
}