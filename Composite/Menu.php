<?php

declare(strict_types=1);

namespace Code\Composite;

class Menu extends MenuComponent
{
    private $iterator;
    private $menuComponents;
    private $name        = '';
    private $description = '';

    public function __construct(string $name, string $description)
    {
        $this->name        = $name;
        $this->description = $description;
        $this->menuComponents = [];
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        foreach ($this->menuComponents as $component) {
            if ($component == $menuComponent) {
                unset($this->menuComponents[$component]);
            }
        }
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function createIterator()
    {
        if (null === $this->iterator) {
            $this->iterator = new CompositeIterator(new \ArrayIterator
            ($this->menuComponents));
        }

        return $this->iterator;
    }

    public function print(): void
    {
        echo PHP_EOL . $this->getName();
        echo ', ' . $this->getDescription();
        echo '---------------------';

        echo 'niet af';
//        Iterator<MenuComponent> iterator = menuComponents.iterator();
//		while (iterator.hasNext()) {
//            MenuComponent menuComponent = iterator.next();
//			menuComponent.print();
//		}

    }

}
