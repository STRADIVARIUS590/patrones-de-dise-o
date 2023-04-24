<?php
include_once 'Mediator.php';
//el componente base se encarga de almacenar el mediador en las instancias de los componentes
class BaseComponent{

    protected $mediator;
    
    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }


    public function setMediator(Mediator $mediator): void{
        $this->mediator = $mediator;        
    }
}