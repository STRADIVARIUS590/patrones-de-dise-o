<?php

class Context{
    public $state;

    public function setState(State $state){
        $this->state = $state;
        $this->state->setContext($this);
    }
 // al presionar el boton de bloqueo
    public function lockBtnPressHandler(){
        return $this->state->lockBtnPressHandler();
    }

    // al presionar el boton de la camara
    public function cameraBtnPressHandler(){
        return $this->state->cameraBtnPressHandler();
    }

    // desbloquear telefono, solo para probar la transicion de regresso a bloeuqad o
    public function unlockPhone(){
        return $this->state->unlockPhone();
    }
    
    // el estado puede usar servicios que ofrece el contexto

    public function is_network_conectivity_active(){
        return rand(0,1) == 1;
    }
}