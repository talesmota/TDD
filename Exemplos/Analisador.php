<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Analisador
 *
 * @author tales
 */
class Analisador {

    //put your code here
    public $comados = array(
        "phpunit"   => "phpunit",
        "color"     => "--colors",
        "coverage"  => "--coverage-html="
    );

    public function executar( $arq, $arr )
    {
        
        if( !in_array("phpunit", $arr) ){
            throw new Exception("PHPUnit não declarado");            
        }
        ob_start();
        $comando = implode( " ", $arr);
        system($comando . ' '. $arq, $saida);
        $saida = ob_get_clean();
        return $saida;
    }
    public function filtrando( $str ){
        $saida = array();
        $tok = strtok($str, "\n\t");
        while ($tok !== false) {
            $saida[] = $tok;
            $tok = strtok("\n\t");
        }
        return $saida;
    }
    public function analisando( $arr ){
        $texto = array();
        foreach ($arr as $value) {
            $texto[] = $this->resolveSintax($value);
        }
        return $texto;
    }
    
    public function resolveSintax( $text ){
        $saidaTexto = array();
        if( preg_match("/failures/i", strtolower($text) ) ){
            $saidaTexto = array(
                "class" => 'alert alert-error',
                "texto" => $text
            );
        }
        elseif( preg_match("/ok/i", strtolower($text) ) ){
            $saidaTexto = array(
                "class" => 'alert alert-success',
                "texto" => $text
            );
        }
        elseif( preg_match("/\/+.*:/i", strtolower($text) ) ){
            $saidaTexto = array(
                "class" => 'alert alert-warning',
                "texto" => $text
            );
        }
        elseif( preg_match("/[0-9]+\)/i", strtolower($text) ) ){
            $saidaTexto = array(
                "class" => 'badge',
                "texto" => $text
            );
        }
        else{
            $saidaTexto = array(
                "class" => '',
                "texto" => $text
            );
        }
        return $saidaTexto;
    }
}

