<?php 

class ConcreteObserverA implements \SplObserver{

    public function update(\SplSubject $subject): void{
        if($subject->state == 7){
            echo "Obserador concreto A ha reaccionado la evento<br>";
        }
    }

}