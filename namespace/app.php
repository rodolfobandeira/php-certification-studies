<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Veiculo\Carro\Car;

function my_autoloader($class) {
    include 'Veiculo/' .$class . '.php';
}
spl_autoload_register('my_autoloader');


$carro = new Car();
$carro->honk();