<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Funcionario;

class ControladordeBonificacoes
{
    private $totalBonificacoes = 0;
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario-> calculaBonificacao();
     }

    public function RecuperaTotal(): float
    {
        return $this->totalBonificacoes;
     }
}