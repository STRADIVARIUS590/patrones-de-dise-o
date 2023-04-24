<?php
include_once 'BaseComponent.php';
class Component2 {
    
    use BaseComponent;

    
    public function doC(){
        echo "<br> El componente 2 realiza C";
        $this->mediator->notify($this, 'C');
    }

    public function doD(){
        echo "<br> El componente 2 realiza D";
        $this->mediator->notify($this, 'D');
    }
}