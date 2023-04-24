<?php 

// permite tener una unica instancia de un clas e y proporciona una unica forma de acceder a esta

// SE CONSIDERA UN ANTIPATRON EN ALGUNOS CASOS>>>>>>>>>>>>>>>>>>>>>>>>
include_once 'Singleton.php';


$s0 = Singleton::getInstance();
$s1 = Singleton::getInstance();

echo ($s0 === $s1) ? "el singleton funciona, son la misma instancia" : 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
echo '<br> FINIS';