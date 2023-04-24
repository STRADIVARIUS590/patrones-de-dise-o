<?php 

// este patron restringe las comunicaciones entre los objetos, cominicandose solo a travez de una clase mediadora





include_once 'Component1.php';
include_once 'Component2.php';
include_once 'ConcreteMediator.php';
$component1 = new Component1();
$component2 = new Component2();
$mediator = new ConcreteMediator($component1, $component2);

$component1->doA();


















echo '<br>FINIS';