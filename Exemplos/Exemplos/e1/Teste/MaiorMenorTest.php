<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-12-05 at 00:26:16.
 */
require '../MaiorMenor.php';
require '../CarrinhoDeCompra.php';
require '../Produto.php';
class MaiorMenorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var MaiorMenor
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new MaiorMenor;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MaiorMenor::encontrar
     * @todo   Implement testEncontrar().
     */
    public function testEncontrar() {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->add( new Produto( "Liquidificadir", 250.00 ) );
        $carrinho->add( new Produto( "Geladeira", 450.00 ) );
        $carrinho->add( new Produto( "Jogo de pratos", 70.00 ) );

        $maiorMenor = new MaiorMenor();
        $maiorMenor->encontrar($carrinho);
        
        $this->assertEquals( "Jogo de pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals( "Geladeira", $maiorMenor->getMaior()->getNome());
        
    }
    
//    public function testEncontrarOrdemDecrescente() 
//    {
//        $carrinho = new CarrinhoDeCompras();
//        $carrinho->add( new Produto( "Geladeira", 450.00 ) );
//        $carrinho->add( new Produto( "Liquidificadir", 250.00 ) );
//        $carrinho->add( new Produto( "Jogo de pratos", 70.00 ) );
//
//        $maiorMenor = new MaiorMenor();
//        $maiorMenor->encontrar($carrinho);
//        
//        $this->assertEquals( "Jogo de pratos", $maiorMenor->getMenor()->getNome());
//        $this->assertEquals( "Geladeira", $maiorMenor->getMaior()->getNome());
//        
//    }

}