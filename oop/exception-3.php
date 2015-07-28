<?php

try {
    class MyException extends Exception {}
    try {
        throw new MyException('Erreur');
    } catch (Exception $e) {
        echo 'Exception';
        throw $e;
    } catch (MyException $e) {
        echo 'MyException';
        throw $e;
    }
} catch (MyException $e) {
    echo get_class($e);
}
