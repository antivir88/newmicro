<?php

/** @var \Micro\Web\PhpRenderer $this */

$this->registerCss(' h1 { color: pink; }', true);
$this->registerScript('window.onload = function(){ alert("loaded"); }', true);

use \Micro\Html\Html;

echo Html::doctype('html5');
echo Html::openTag('html', ['lang'=>'ru']);
    echo Html::openTag('head');
        echo Html::title('NewMicro');
    echo Html::closeTag('head');
    echo Html::openTag('body');
        echo Html::heading(1, 'Sample app');
        echo Html::openTag('div');
            echo $content;
        echo Html::closeTag('div');
    echo Html::closeTag('body');
echo Html::closeTag('html');
