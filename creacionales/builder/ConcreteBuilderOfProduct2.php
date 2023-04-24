<?php 

include_once 'Product2.php';

class ConcreteBuilderOfProduct2 implements Builder{

    private $product;

    public function __construct(){
        $this->refresh();
    }

    public function refresh(){
        $this->product = new Product2;
    }

    public function createPartA() : void{
        $this->product->parts[] = 'Part A';
    }

    public function createPartB(): void{
        $this->product->parts[] = 'Part B';
    }
    
    public function createPartC(): void
    {
        $this->product->parts[] = 'Part C';
    }

    public function getProduct(): Product2{
        return $this->product;
    }


}