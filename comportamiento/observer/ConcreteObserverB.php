<?php


class ConcreteObserverB implements \SplObserver{

    public function update(\SplSubject $subject): void{
    
        if($subject->state > 5){
            echo "El observador B concreto ha reaccionado al evento <br>";
        }
    }

}