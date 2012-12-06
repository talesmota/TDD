<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author tales
 */
class Produto {

    private $_nome;
    private $_valor;

    function __construct($nome, $valor) {
        $this->_nome = $nome;
        $this->_valor = $valor;
    }

    public function getNome() {
        return $this->_nome;
    }

    public function setNome($nome) {
        $this->_nome = $nome;
    }

    public function getValor() {
        return $this->_valor;
    }

    public function setValor($valor) {
        $this->_valor = $valor;
    }

}


