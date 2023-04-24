<?php 

// es repsonsable de ejecutar los pasos de la construccion en oun orden en particular
// es opcional, pudiendo los pasos ejecutarse directamente en el codigi cliente

class Director{

    /**
     * @var Builder
     */

     private $builder;

     /**
      * el director puede funcionar concualquier builder que le pase el cliente, 
      * de esta forma, el cliente puede controlar el tipo del producto construido
      */

      public function setBuilder(Builder $builder){
        $this->builder = $builder;
      }



      // diferentes configuraciones del producto final
      public function buildMinimalViableproduct(): void{
        $this->builder->createPartA();
      }

      public function buildFullFeaturedProduct(): void{
        $this->builder->createPartA();
        $this->builder->createPartB();
        $this->builder->createPartC();
      } 
}