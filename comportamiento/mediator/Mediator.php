<?php 

interface Mediator{

    /*  metodo usado por los componentes para notificar los eventos al mediador. Este puede reaccionar a los eventos 7 
    * pasar la ejecucion a otros componentes
    */  
    public function notify(object $sender, string $event): void;
}