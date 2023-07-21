<?php   

class AlphabeticalOrderIterator implements Iterator{
    
    // la coleccion a recorrer
    private $collection;
    private $position = 0;
    // indica la posicion en la que recorremos
    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;        
    }




    public function current(){
        return $this->collection->getItems()[$this->position];
    } 

    public function next():void{
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key(){
        return $this->position;
    }

    public function valid():bool{
        return isset($this->collection->getItems()[$this->position]);
    }

    public function rewind() :void {
        $this->position = $this->reverse ? count($this->collection->getItems()) -1 : 0;
    }

}