<?php 
// permite pasar solicituddes sobre una cadena de manejadores.
// cada manejador decide si prcesar la solicitud o pasarla al sigueente manejador

include_once 'MonkeyHandler.php';
// include_once 'AbstractHandler.php';
include_once 'SquirrellHandler.php';
 
include_once 'DogHandler.php';
 

$monkeyHa = new MonkerHandler;
$squirrellHa = new SquirrellHandler;
$dogHa = new DogHandler;

/*
// $monkeyHa->setNext($quirrellHa);
$monkeyHa->setNext($squirrellHa)->setNext($dogHa);

echo $monkeyHa->handle("Nute"); // pasa hacia la ardilla
echo '<br>';
echo $monkeyHa->handle("Banan"); // el mono maneja la soliciud
echo '<br>';
echo $monkeyHa->handle("Meat"); // el perro maneja la soliciud

 */

 //++++++++++++++++++
 $monkeyHa->setNext($squirrellHa)->setNext($dogHa);
clientCode($monkeyHa);


echo '<br>-------------------<br>';
clientCode($squirrellHa);
echo '<br>-------------------<br>';
clientCode($dogHa);


function clientCode(Handler $handler){
    $foods = ['Nut', 'Meat', 'Banana'];

    foreach($foods as $food){
        echo "who wants a $food ? ";
        if($handler->handle($food)){
            echo $handler->handle($food).'<br>';
            // break;
        }else{
            echo 'Nadie toco '. $food.'<br>';
        }
    }
}




echo '<br>FIN';