<?php

include_once 'Command.php';
include_once 'Receiver.php';
class ComplexCommand implements Command{

    // sin embargo, los comandos pueden delegar acciones má scomplejas a otros objetos llamados 'recibidores'
 
    public function __construct(private Receiver $receiver, private $a, private $b){}


    public function execute(): void{
        echo "Complex Command, Complex stuff should be done by a receiver object <br>";

        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}

