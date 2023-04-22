<?php
include_once 'Handler.php';
abstract class AbstractHandler implements Handler{

    /**
     * @var Handler
     */
     private $nextHandler;


     public function setNext(Handler $handler): Handler{
        $this->nextHandler = $handler;
        // regresar al handler desde aqui nos permitira encadenar los handlers
        return $handler;
    }

    public function handle(string $request): ?string{
        echo get_class($this) . '---FORWARD_TO>>>';
        if($this->nextHandler){
            return $this->nextHandler->handle($request);
        }
        return null;
     }
}