<?php 

/**
 * la clase invocadora está asociada con uno o varios comandos 
 * envia solicitudes a ellos 
 */

 class Invoker{
    // comando


    /**
     * @var Command
     */
    private $onStart;

    /**
     * @var Command
     */
    private $onFinish;


    


    /**
     * inicializar comandos
     */

     public function setOnStart(Command $command){
        $this->onStart = $command;
     }

     public function setOnFinish(Command $command){
        $this->onFinish = $command;
     }

     /* el onvicador no depende de un comando o recibidor concreto

    pasa la solicitud a indirectamente al recibidor, al ejecutar un comando 
     */

     public function doSometingImportant(){

        echo "Invoker: Does anybody want something done before i begin ? <br>";
        if($this->onStart instanceof Command){
            $this->onStart->execute();
        }

        echo "Invoker: does anybody want something after i finish it ? <br>";
        if($this->onFinish instanceof Command){
            $this->onFinish->execute();
        } 
            


     }

}