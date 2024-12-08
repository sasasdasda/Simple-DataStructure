<?php



class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data){
        $newNode = new Node($data);
        if($this->head === null){
            $this->head = & $newNode;
        }else{
            $current = $this->head;
            while($current->next !== null){
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }
    public function display(){
        $current = $this->head;
        while($current !== null){
            echo $current->data." -> ";
            $current = $current->next;
        }
        echo "null";
    }
    public function to_array_linked(){
        $arr = [];
            $current = $this->head;
            while($current !== null){
                $arr[] = $current->data;
            }

        return $arr;
    }

}


$linked = new LinkedList();
$linked->insert('one');
$linked->insert('two'); 
$linked->insert('three');
$linked->insert('four');
$linked->insert('five');
$linked->insert('six');
$linked->display();