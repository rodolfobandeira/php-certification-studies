<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


## autoload fixed.
## Thanks @malukenho !!
## :)
    spl_autoload_register(
        function ($className) {
        $paths = explode('\\', $className);
        $path = implode(DIRECTORY_SEPARATOR, $paths) . '.php';
            if (!file_exists($path)) {
                throw new RuntimeException(
                    sprintf('File %s not found!', $path)
                );
            }
        require $path;
    });

use Veiculo\Car;
use Veiculo\Truck;

$carro = new Car();
$carro->honk();

$caminhao = new Truck();
$caminhao->honk();