<?php 
require_once 'Command.php';
class SimpleCommand implements Command{
    private $payload; 

    public function construct($payload){

        $this->payload = $payload;
    }

    public function execute(): void{
        echo "SimpleCommand: See, i can do simple things, like printing <br>";
    }

}
