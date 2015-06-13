<?php

function test(){
    if(func_num_args()>0) {
        $argument = func_get_arg(1); // starts in ZERO, so it will print "Red foo"
        echo "Red $argument". PHP_EOL;
    }

    echo func_num_args(). PHP_EOL; // 5 arguments. To count it doesn' starts in zero.

    echo var_dump(func_get_arg(3));
}

test("Blue Car", 'foo', 'bar', 8, 9);

/*
Red foo
5
int(8)
 */
