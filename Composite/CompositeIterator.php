<?php

declare(strict_types=1);


namespace Code\Composite;


class CompositeIterator implements \Iterator
{
    private $stack;

    public function __construct($iterator)
    {
        $stack = new \SplStack();
        $stack->push($iterator);
        $this->stack = $stack;
    }

    public function current()
    {
    }

    public function next(): ?MenuComponent
    {
        if ($this->valid()) {
            $iterator = $this->stack->bottom();
            $component = $iterator->next();
            $this->stack->push($component->createIterator());

            return $component;
        } else {

            return null;
        }
    }

    public function key()
    {
    }

    public function valid(): bool
    {
        if ($this->stack->isEmpty()) {

            return false;
        }
        $iterator = $this->stack->bottom();
        if (! $iterator->valid()) {
            $this->stack->pop();

            return $this->valid();
        } else{

            return true;
        }
    }

    public function rewind()
    {
    }

}