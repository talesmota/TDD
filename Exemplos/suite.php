<?php

require 'Analisador.php';

$analisador = new Analisador();
$saidaComando = $analisador->executar( 'Classe1Test.php',array(
    'phpunit','color'
) );
$tokens = $analisador->filtrando( $saidaComando );
$textoProcessado = $analisador->analisando( $tokens );

include 'index.php';

