<?php
require 'Produto.php';
require 'CarrinhoDeCompra.php';
require 'MaiorMenor.php';


$carrinho = new CarrinhoDeCompras();
$carrinho->add( new Produto( "Geladeira", 450.00 ) );
$carrinho->add( new Produto( "Liquidificadir", 250.00 ) );
$carrinho->add( new Produto( "Jogo de pratos", 70.00 ) );

$maiorMenor = new MaiorMenor();
$maiorMenor->encontrar($carrinho);

echo "O Menor " . $maiorMenor->getMenor()->getNome() . "<br>";
echo "O Maior " . $maiorMenor->getMaior()->getNome() . "<br>";