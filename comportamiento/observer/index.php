<?php

// se define un sistema de sobscripcion en el que los objetos son notificados de los cambios en el objeto al que estan subscritos (estan observando)
// php contien interfaces con los metods adecuados para implkementar observadores (SpñSubject y SplObserver)

include_once 'Subject.php';
include_once 'ConcreteObserverA.php';
include_once 'ConcreteObserverB.php';
$subject = new Subject;

$o1 = new ConcreteObserverA();
$o2 = new ConcreteObserverB();

$subject->attach($o1);
$subject->attach($o2);


// $subject->detach($o1);
$subject->somebusinessLogic();