<?php

class MyIterator implements Iterator
{
  private $var = array();

  public function __construct($array)
  {
    if (is_array($array) ) {
      $this->var = $array;
    }
  }

  public function rewind() {
    echo "rewinding\n";
    reset($this->var);
  }

  public function current() {
    $var = current($this->var);
    echo "current: $var\n";
    return $var;
  }

  public function key() {
    $var = key($this->var);
    echo "key: $var\n";
    return $var;
  }

  public function next() {
    $var = next($this->var);
    echo "next: $var\n";
    return $var;
  }

  public function valid() {
    $var = $this->current() !== false;
    echo "valid: " .(int) $var. "\n";
    return $var;
  }
}

$values = array("Jesus", "é", "Vida");
$it = new MyIterator($values);

foreach ($it as $a => $b) {
  print "$a: $b" .PHP_EOL. PHP_EOL;
}

/* 
 * output is:
 ****************


rewinding
current: Jesus
valid: 1
current: Jesus
key: 0
0: Jesus

next: é
current: é
valid: 1
current: é
key: 1
1: é

next: Vida
current: Vida
valid: 1
current: Vida
key: 2
2: Vida

next:
current:
valid: 0

 ****************

*/

