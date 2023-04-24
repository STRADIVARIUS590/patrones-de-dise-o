<?php

class Product2{

    public $parts = [];


    public function listParts(){
        echo "<br>Product 2".implode(', ',$this->parts);
    }
}