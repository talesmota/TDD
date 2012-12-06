<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarrinhoDeCompra
 *
 * @author tales
 */
class CarrinhoDeCompras {

    private $_produtos;

    public function add($prod) {
        $this->_produtos[] = $prod;
    }

    public function getProdutos() {
        return $this->_produtos;
    }

    public function setProdutos($produtos) {
        $this->_produtos = $produtos;
    }

}



