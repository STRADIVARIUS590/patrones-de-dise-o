<?php
/* 
este patron permite guardar y restaurar el estado de un objeto sin revellar detalles internos

ejemplo: 
un editor permite guardar los cambios del documento para tener la posibilidad de deshacerlos

el estado de los objetos se copia desde adentro del objeto mismo (originador), eliminando la necesidad de exponer todos los campos 
,guardando el estado en un objeto especial 'memento', cuyo contenido no es accesible para ningina otra clase ademas de su originadora.

Otros objetos se deben comunicar con los memento usando interfaces que permiten obtener de estos metadatos, como el nomrbe de la operacion realizada y la martca de tiempo
, mas no todos los datos

los mementos son guardados en otros objetod llamador 'caretakers'. DEbido a que estos solo interactual con ellos a travez de una interface limitada , 
no pueden acceder on midificar el estado de estos, a diferencia del originador

>>>>LOS LENGUAJES DE TIPADO DINAMICO COMO JAVASCRIPT Y PHP NO PUEDEN GARANTIZAR QUE EL ESTADO DE LOS OBJETOS PERMANEZCA CONSISTENTE

*/

include_once 'Memento.php';
include_once 'ConcreteMemento.php';
include_once 'Originator.php';
include_once 'Caretaker.php';
$o = new Originator(230,123, 'Hola', 'RED', 'CIRCLE');
$care = new Caretaker($o);
$care->backup(); // estado guardado

$o->doSomething(12, 10, 'Hola mundo', 'BLACK', 'RECT');
$care->backup(); // estado guardado

$o->doSomething(500, 490, 'Hol mund', 'WHITE', 'TRIANGLE');
$care->backup(); // estado guardado

$care->showHistory();

// restauramos los cambios en  la instancia del originador agregada en el caretaker a partir del arreglo de mementos    
$care->undo();
$care->undo();
$care->undo();
