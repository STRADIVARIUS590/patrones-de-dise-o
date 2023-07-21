<?php

// el caretaker no depende de clases memento concretas. interactua con los memento a traves de la interface comun que los mementos implementan

class Caretaker{
    // pila que almacena los estados, para navegar entre ellos
    private $mementos = [];

    private $originator;
    
   
    public function __construct(Originator $originator){
        $this->originator = $originator;
    }

    public function backup(){
        echo 'CARETAKER : Se ha guardado el estado del originaor<br>';
        $this->mementos[] = $this->originator->save();   
    }

    public function undo(){
        if(count($this->mementos) == 0){
            return;
        }

        $memento = array_pop($this->mementos);

        echo 'CARETAKER: Restaurando el estado';
// try catch, etc
        $this->originator->restore($memento);
    }

    public function showHistory(){
        foreach($this->mementos as $memento){
            print_r($memento);
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }
    }
   
}