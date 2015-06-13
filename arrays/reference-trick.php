<?php

// What will the $arr array contents be after running following code?
$arr = array(1,2,3);

$x = 0;
foreach($arr as $k=>&$v) // The trick is here. Every value from $arr here is going to
{                        // be a real reference to $arr. So, if we change $v inside
    $v+=1;               // the loop, it'll update the value on $arr
                         //

    printf('Loop: %x. $v: %d $arr %s %s',
        $x,
        $v,
        print_r($arr, true),
        PHP_EOL
    );

    $x++;
}

echo "Final: ---" .PHP_EOL;
echo $v. PHP_EOL;
print_r($arr);


/*
Loop: 0. $v: 2 $arr Array
(
    [0] => 2
    [1] => 2
    [2] => 3
)

Loop: 1. $v: 3 $arr Array
(
    [0] => 2
    [1] => 3
    [2] => 3
)

Loop: 2. $v: 4 $arr Array
(
    [0] => 2
    [1] => 3
    [2] => 4
)

Final: ---
4
Array
(
    [0] => 2
    [1] => 3
    [2] => 4
)
*/
