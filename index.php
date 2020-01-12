<?php
//TURN ON ERROR REPORTING
ini_set("display_errors",1);
error_reporting(E_ALL);
require "vendor/autoload.php";
//instantiate fat-free
$f3=Base::instance();
//define a default route
$f3->route('GET /', function (){
    $view = new Template();
    echo $view-> render('views/home.html');
    echo '<h1> Howdy</h1>';
});

//run fat free
$f3->run();
