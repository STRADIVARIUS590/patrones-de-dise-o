<?php

abstract class State{

    protected $context;

    public function setContext(Context $context){
        $this->context = $context;
    }

 // al presionar el boton de bloqueo
    abstract function lockBtnPressHandler();

    // al presionar el boton de la camara
    abstract function cameraBtnPressHandler();

    // desbloquear telefono 
    abstract function unlockPhone();
}