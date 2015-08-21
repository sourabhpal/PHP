<?php 

class Node 
{
  public $value, $prev, $next;
  public function __construct($value)
  {
    $this->value = $value;
  }
}
//implementation of linked list
class DoublyLinkedList 
{
  public $head, $tail;
  public function __construct()
  {
    $this->head = NULL; //have the head point to NULL
    $this->tail = NULL; //have the tail point to NULL
  }
  public function add($value)
  {
    $node = new Node($value);
    if ($this->head === null)
    {
    	$this->head = $node;
    }
    else if ($this->head === null)
    {
    	$this->tail = $node;	
    }
    else
    {
    	$this->tail->next = $node;
    	$node->prev = $this->tail;
    }
  }
  //finds the node on the $pos position
  public function find($pos)
  {
    $current = $this->head;
    for ($i = 1; $i < $pos; $i++)
    {
    	$current = $current->next;
    }
    return $current;
  }
  //finds all nodes with the value of $value
  public function findAllNodesWithValueOf($value)
  {
    //your code here
  }
  //removes all nodes with the value of $value
  public function removeAllNodesWithValueOf($value)
  {
    //your code here
  }
  //removes node of position $pos
  public function removeNode($pos)
  {
    //your code here
  }
  //inserts a new value in the specified position
  public function insert($pos, $value)
  {
    $current = $this->head;
    
  }
  public function printValues()
  {
    $node = $this->head;  //have $node point to where $this->head is pointing to
    if($node == NULL) {  //if $node points to NULL
      echo "Linked List is empty";
      return NULL;
    }
    while($node->next != NULL){
      echo "Node value is " . $node->value ."<br />";
      $node = $node->next;  //now have $node point to where $node->next is pointing to
    }
    echo "Node value is " . $node->value ."<br />"; //have it print the last node value
  }
}
$dll = new DoublyLinkedList(); //creates a new instance of the doubly linked list
$dll->add(5); //should add a new node with the value of 5
$dll->add(7); //should add a new node with the value of 7
$dll->add(10);
$dll->removeAllNodesWithValueOf(7); //should remove all nodes with value of 7
$dll->remove(1); //removes node of position 1
$dll->add(3); //should add a new node with the value of 3
$dll->insert(1, 100); //insert a new node of value 100 in the position 1
$dll->printValues(); //should print all the values in the doubly linked list

?>