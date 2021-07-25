<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta {
    public function percentualTarifa()
    {
        return 0.03;
    }
}