<?php

// contiene la informacion que podria cambiar, tambien define el metodo para crear nuevos mementos y reestablecer el estado actual a partir de este

class Originator{

    
    private $mouseX, $mouseY, $text, $color, $figure; // las variables que copiaremos en el estado

    public function __construct($mouseX = null, $mouseY = null, $text = null, $color = null, $figure = null){
        $this->mouseX = $mouseX;
        $this->mouseY = $mouseY;
        $this->text = $text;
        $this->color = $color;
        $this->figure = $figure;

        echo "ORIGINADOR: Estado actual: MOUSE_X => {$this->mouseX},    MOUSE_Y => {$this->mouseY},   TEXT => {$this->text},      COLOR   => {$this->color},    FIGURE => {$this->figure}<br>";
    }


    // esta clase contiene la logica del negocio, de forma que sus variables internas cambian
    // el cliente deberia guardar el estado actual antes de llamar a metodos de la logica del negocio usando el metodo save()
    public function doSomething($mouseX, $mouseY, $text, $color, $figure){
        $this->mouseX = $mouseX;
        $this->mouseY = $mouseY;
        $this->text = $text;
        $this->color = $color;
        $this->figure = $figure;
        echo "ORIGINADOR: CAMBIO DE ESTADO;  Estado actual: MOUSE_X => {$this->mouseX},    MOUSE_Y => {$this->mouseY},   TEXT => {$this->text},      COLOR   => {$this->color},    FIGURE => {$this->figure}<br>";
    }


    // guardar estado
    public function save(): Memento{
        return new ConcreteMemento(
            $this->mouseX, 
            $this->mouseY,
            $this->text,
            $this->color,
            $this->figure
        );
    }

    // restaurar a partir de un estado
    public function restore(Memento $memento):void{
        $this->mouseX = $memento->mouseX;
        $this->mouseY = $memento->mouseY;
        $this->text = $memento->text;
        $this->color = $memento->color;
        $this->figure = $memento->figure;

        echo "ORIGINADOR: CAMBIO DE RESTAURADO;  Estado actual: MOUSE_X => {$this->mouseX},    MOUSE_Y => {$this->mouseY},   TEXT => {$this->text},      COLOR   => {$this->color},    FIGURE => {$this->figure}<br>";
    }
}