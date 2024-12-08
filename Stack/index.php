<?php

/**
 * Stack Data Structure
 * Last in First out 'LIFO'
 */
class Stack{
    public $stack = [];

    public function insert($data)
    {
        return array_push($this -> stack,$data) ? true : false ;
    }
    public function display(){
        return $this->stack;
    }
    public function delete(){
        return array_pop($this->stack);
    }
}


$stack = new Stack;
$stack->insert(1);
$stack->insert(2);
$stack->insert(3);
$stack->delete();
print_r($stack->display());