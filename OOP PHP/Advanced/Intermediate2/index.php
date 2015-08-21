<?php 

class Node
{
	public $next;
	public $value;
	public function __construct($val)
	{
		$this->value = $val;
		$this->next = null;
	}
}
class Queue
{
	private $front; // the front of our Queue
	private $rear; // the rear of our Queue
	public $maxSize; // how many elements can be in our queue
	public function __construct($val)
	{
		$this->front = null;
		$this->rear = null;
		$this->maxSize = $val;
	}
	public function enqueue($val) // it will add an element to the end of the Queue
	{
		if ($this->front == null)
		{
			$node = new Node($val);
			$this->front = $node;
			return;
		}
		$current = $this->front;
		while ($current->next !== null)
		{
			$current = $current->next;
		}
		$node = new Node($val);
		$current->next = $node;
	}
	public function dequeue() // it will remove an element from the front of the Queue
	{
		if ($this->isEmpty())
		{
			return false;
		}
		else
		{
			$this->front = $this->front->next;
		}
	}
	public function front() // returns the element in the front of your Queue
	{
		return $this->front->value;
	}
	public function rear() // returns the element in the rear of your Queue
	{
		return $this->rear->value;
	}
	public function isEmpty() // returns true if the Queue is empty
	{
		if ($this->front === null)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function isFull() // returns true if the Queue is full
	{
	}
}
$q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
$q->isEmpty(); // returns true
$q->enqueue(100); // Queue: 100
$q->rear(); // returns 100
$q->front(); // returns 100
$q->enqueue(20); // Queue: 100, 20
$q->enqueue(2); // Queue: 100, 20, 2
$q->dequeue(); // Queue: 20, 2
$q->enqueue(500); // Queue: 20, 2, 500
$q->enqueue(12); // Queue: 20, 2, 500, 12
$q->enqueue(30); // Queue: 20, 2, 500, 12, 30
$q->isFull(); // returns true

?>