<?php
require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();
$app->get('/clima', function(){
 return 'Hola Cristina con matricula 414125528 ';
});
$app->run(); 