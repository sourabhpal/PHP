<? php
Class SinglyLinkedList
{
  public function __construct()
  {
    $this->head = null;
    $this->tail = null;
  }
  public function add($val)
  {
    $node = new Node($val);
    if ($this->head == null)
    {
      $this->head = $node;
    }
    else if ($this->tail == null)
    {
      $this->tail = $node
    }
    else
    {
      $this->tail->next = $node;
      $this->tail = $node;
    }
    return true;
  }
  public function remove($value)
  {
    if ($this->head == null)
    {
      return false;
    }
    $current = $this->head;
    while ($current->next !== null)
    {
      if ($current->next->value == $value)
      {
        $current->next = $current->next->next;
        return true;
      }
      $current = $current->next;
    }
    return false;
  }
  public function insert($valueAfter, $newValue)
  {
    if ($this->head == null)
    {
      $node = new Node($newValue);
    }
    else if ($this->tail == null)
    {
      $node = new Node($newValue);
    }
    $current = $this->head;
    while ($current->next !== null)
    {
      if ($current->next->value == $valueAfter)
      {
        $node = new Node($newValue);
        $current->next->next = $node;
        $node->next = $current->next->next->next;
        return true;
      }
      $current = $current->next;
    }
  }
  public function printList()
  {
    if ($this->head !== null)
    {
      $current = $this->head;
      while ($current->next != null)
      {
        echo $current->next->value ."<br>";
      }
    }
  }
  public function find($value)
  {
    //return node if value is found
    //return false if not found
  }
  public function isEmpty()
  {
    //return true if the linked list is empty
    //return false if linked list has nodes
  }
}
?>