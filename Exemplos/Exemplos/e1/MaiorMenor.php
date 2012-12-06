<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaiorMenor
 *
 * @author tales
 */

class MaiorMenor {

    //put your code here
    private $_maior = null;
    private $_menor = null;

    public function encontrar(CarrinhoDeCompras $carrinho) {
        foreach ($carrinho->getProdutos() as $produto) {
            if ($this->_menor == null || $produto->getValor() < $this->_menor->getValor() ) {
                $this->_menor = $produto;
            }
            elseif ( $this->_maior == null || $produto->getValor() > $this->_maior->getValor() ) {
                $this->_maior = $produto;
            }
        }
    }

    public function getMaior() {
        return $this->_maior;
    }

    public function setMaior($maior) {
        $this->_maior = $maior;
    }

    public function getMenor() {
        return $this->_menor;
    }

    public function setMenor($menor) {
        $this->_menor = $menor;
    }


}

