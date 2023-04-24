<?php 

class Product1{
    public $parts = [];


    public function listParts(){
        echo '<br> Product 1  Parts: '. implode(', ', $this->parts);
    }
}