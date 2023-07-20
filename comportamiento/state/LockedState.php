<?php 

class LockedState extends State{

    
    public function lockBtnPressHandler(){
        return 'ESTADO BLOQUEADO: Boton de bloqueo presionado. Encender pantalla';
    }
    public function cameraBtnPressHandler()
    {
        return 'ESTADO BLOQUEADO: Boton de camara presionado. Encender pantalla';
    }

    public function unlockPhone()
    {
        $this->context->setState(new UnlockedState);
        return 'ESTADO BLOQUEADO: Desbloquear telefono. estado cambiado';
    }
}