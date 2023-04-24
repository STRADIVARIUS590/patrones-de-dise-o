<?php 
include_once 'Builder.php';
include_once 'Product1.php';
class ConcreteBuilderOfProduct1 implements Builder {

    private $product;

    public function __construct(){
        $this->reset();
    }

    public function reset(){
        $this->product = new Product1();
    }

    // pasos de construccion 

    public function createPartA(): void{
        $this->product->parts[] = 'Part A1';
    }

    public function createPartB(): void{
        $this->product->parts[] = 'Part B1';
    }

    public function createPartC(): void{
        $this->product->parts[] = 'part C1';
    }

    public function getProduct(): Product1{
        $result = $this->product;
        $this->reset();
        return $result; 
    }
}