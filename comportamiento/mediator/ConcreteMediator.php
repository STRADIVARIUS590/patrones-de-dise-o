<?php 
include_once 'Mediator.php';

// coordinan los componentes

class ConcreteMediator implements Mediator{
    
    private $componentA;
    private $componentB;

    public function __construct(Component1 $componentA, Component2 $componentB
    ){
        $this->componentA = $componentA;
        $this->componentA->setMediator($this);
        
        
        $this->componentB = $componentB;
        $this->componentB->setMediator($this);
    }

    public function notify(object $sender, string $event):void{
        if($event == 'A'){
            echo "<br> El mediador reacciona en A y detona más operaciones";
            $this->componentB->doC();
        }

        if($event == 'D'){
            echo "<br> El madiador reacciona en D y detona más operaciones";
            $this->componentA->doB();
            $this->componentB->doC();
        } 


    }
}