<?php

/*
permite moverse a travez de los elementos de una coleccion sin exponer su reoresentacion interna (pils, cola, aarbol, etc)

las coecciones se pueden recorree dde distintas formas, dependiendo la necesidad del programa y del tipo de estructura, accediendo de forma secuencial 
crea el problema de que se recorre varias veces para acceder al cierto elemento, lo cual nos obliga a implemenar distintas formas de recorrerla, son ebbargo, 
agregar algoritmos para recorrerse solo incrementa el tamalo de la clase 

este patron propone extraer los algoritmos para recorrer la coleccion a clases iteradoras
Ademsa almacenar la logica de recorrer, estos iteradores almacenan todos los datos de recorrido, como posiciones , etc

se usaa cuando la coleccion esconde una estructura de recorrido compleja , y se desea esconder la implementacion de esta desde las clases que usen esta estructura
* */
include_once 'AphpabeticalOrderIterator.php';
include_once 'WordsIterator.php';


$coleccion = new WordsIterator();
$coleccion->addItems('Primero');
$coleccion->addItems('Segundo');
$coleccion->addItems('Tercero');
$coleccion->addItems('Cuarto');

echo 'Recorrido normal:<br>';
foreach($coleccion->getIterator() as $item){
    echo $item.'<br>';
}


echo 'Recorrido al revez:<br>';
foreach($coleccion->getReverseOrderIterator() as $item){
    echo $item.'<br>';
}