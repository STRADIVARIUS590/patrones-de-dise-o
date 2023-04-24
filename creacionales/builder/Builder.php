<?php 


// especifica los metodos para crear los objetos Producto
interface Builder{
    public function createPartA(): void;
    public function createPartB(): void;
    public function createPartC(): void;
            
}