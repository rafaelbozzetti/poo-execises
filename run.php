<?php

include 'vendor/autoload.php';

$html = new Poo\Html\Html;

$img = $html->img('logo.png', ['class'=>'img-responsive']);

echo $html->a($img, "github.com/rafaelbozzetti", ['class'=>'btn btn-primary']);
