<?php

class UnlockedState extends State{
    
    public function lockBtnPressHandler(){
        $this->context->setState(new LockedState); // un estado puede cambiar estados en el contexto
        return 'ESTADO DESBLOQUEADO: Boton de bloqueo presionado. Bloquear y apagar pantalla';
    }
    public function cameraBtnPressHandler()
    {
        return 'ESTADO DESBLOQUEADO: Boton de camara presionado. tomar fotografia';
    }

    public function unlockPhone()
    {
        return 'ESTADO DESBLOQUEADO: no hacer nada';
    }
}