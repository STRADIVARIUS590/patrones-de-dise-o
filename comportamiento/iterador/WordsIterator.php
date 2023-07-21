<?php

class WordsIterator implements IteratorAggregate {
    private $items = [];


    public function getItems(){
        return $this->items;
    }

    public function addItems($item){
        $this->items[] = $item;
    }

    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseOrderIterator(): Iterator{
        return new AlphabeticalOrderIterator($this, true);
    }
}