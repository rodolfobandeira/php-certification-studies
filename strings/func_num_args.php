<?php

function test(){
    if(func_num_args()>0) {
        $argument = func_get_arg(1);
        echo "Red $argument";
    }
}

test("Blue Car");

