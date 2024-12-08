<?php

/**
 * Queue Data Structure
 * First in First out 'FIFO'
 */
class Queue{
    public $queue = [];

    public function insert($data)
    {
        return array_push($this -> queue,$data) ? true : false ;
    }
    public function display(){
        return $this->queue;
    }
    public function delete(){
        return array_shift($this->queue);
    }
}


$stack = new Queue;
$stack->insert(1);
$stack->insert(2);
$stack->insert(3);
$stack->insert(4);
$stack->insert(5);
$stack->insert(6);
$stack->delete();
print_r($stack->display());