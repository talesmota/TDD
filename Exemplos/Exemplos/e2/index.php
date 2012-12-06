<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Produto.php';
require 'CarrinhoDeCompra.php';
require 'MaiorMenor.php';

echo '----<br>';
$carrinho = new CarrinhoDeCompras();
$carrinho->add( new Produto( "Liquidificadir", 250.00 ) );
$carrinho->add( new Produto( "Geladeira", 450.00 ) );
$carrinho->add( new Produto( "Jogo de pratos", 70.00 ) );

$maiorMenor = new MaiorMenor();
$maiorMenor->encontrar($carrinho);
echo "O menor produto " . $maiorMenor->getMenor()->getNome() . "<br>";
echo "O maior produto " . $maiorMenor->getMaior()->getNome() . "<br>";
echo '----<br>';
