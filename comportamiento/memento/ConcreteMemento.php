<?php

class ConcreteMemento implements Memento{

    private $mouseX, $mouseY, $text, $color, $figure;

    private $date;

    public function __construct($mouseX, 
            $mouseY,
            $text,
            $color,
            $figure
    )
    {
            $this->mouseX = $mouseX; 
            $this->mouseY = $mouseY;
            $this->text = $text;
            $this->color = $color;
            $this->figure = $figure;  
            $this->date = date('Y-M-D h:i:s'); 
    }

    public function getName():string{
        return $this->date. random_int(0, 400);
    }

    public function getDate():string{
        return $this->date;
    }

    public function __get($name){
        return $this->{$name};
    }


    
}