<?php 

include_once 'BaseComponent.php';
class Component1 extends BaseComponent{
    
    
    public function doA(){
        echo "<br> El componente 1 realiza A";
        $this->mediator->notify($this, "A");
    }

    public function doB(){
        echo "<br> El componente 1 realiza B";
        $this->mediator->notify($this, "B");
    }

}