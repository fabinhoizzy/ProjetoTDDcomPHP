<?php

namespace ProjetoTDD;

class MaiorEMenor
{
    private float $menor;
    private float $maior;

    public function encontra(CarrinhoDeCompras $carrinho)
    {
        foreach ($carrinho->getProdutos as $produto) {
            if(empty($this->menor)
                || $produto->getValor() < $this->menor->getValor()) {

                $this->menor = $produto;
            else if (empty($this->maior)
                || $produto->getValor() > $this->maior->getValor()){
                $this->maior = $produto;
                }
            }
        }
    }

    /**
     * @return float
     */
    public function getMenor(): float
    {
        return $this->menor;
    }

    /**
     * @return float
     */
    public function getMaior(): float
    {
        return $this->maior;
    }
}