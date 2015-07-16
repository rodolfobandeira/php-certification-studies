<?php
$password_a = password_hash("rodolfo", PASSWORD_DEFAULT);
$password_b = password_hash("rodolfo", PASSWORD_DEFAULT);

printf("Password a: %s %sPassword b: %s %s",
    $password_a,
    PHP_EOL,
    $password_b,
    PHP_EOL
);

$result = (password_verify('rodolfo', $password_a))? 'Equal!': 'Fail!';
printf("%s %s", $result, PHP_EOL);


$result = (password_verify('rodolfo2', $password_b))? 'Equal!': 'Fail!';
printf("%s %s", $result, PHP_EOL);

/*
    Password a: $2y$10$sRQtDeiXnvfmumRv6NSoR.MH5RY5Bj6D08fc3H8J29HxdoIv6wM1i 
    Password b: $2y$10$ufgmLq9FNkPz53.64IRBvuuI0QBWcaE3dbVNeLWp/G75RW70zP97G 
    Equal! 
    Fail! 
*/
