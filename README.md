# PHP Design Patterns
Examples of different design patterns written in PHP.

The code is meant to explain the pattern, not to be the best solution to the "problem".
In every sub folder is a Client.php, you can execute this on the CLI to see the code in action.

## Real world examples
### Observer
* Symfony's Events [system](http://symfony.com/doc/current/event_dispatcher.html)

### Singleton
* The [CodeIgniter](https://codeigniter.com/) framework relies heavily on this pattern

### Factory
* Symfony's Form creation [system](https://symfony.com/doc/current/forms.html#creating-form-classes)

### State
* The Winzou's Symfony [Statemachine Bundle](https://github.com/winzou/StateMachineBundle) utilizes the State pattern.
* The [Workflow component](https://symfony.com/doc/current/workflow/state-machines.html) 
of Symfony can be used as a Statemachine.

### Iterator
PHP has a standard interface you can use for creating a [Iterator](http://php.net/manual/en/class.iterator.php)
Also there are a lot of [predefined Iterators](http://php.net/manual/en/spl.iterators.php) in PHP. 
Keep in mind that PHP uses arrays in a different way than Java does. In PHP arrays are less strict and more flexible.
[More](http://php.net/manual/en/spl.datastructures.php) about data structures in PHP.

### Proxy
Because the book uses Java as main language, it uses a lot of build in Java components in the examples.
Good examples of how to implement different Proxy types in PHP can be found [here](https://ocramius.github.io/blog/proxy-pattern-in-php/)

## Sources
The examples described here are based on the book "Head First Design Patterns" by Eric and Elisabeth Freeman.

* http://shop.oreilly.com/product/9780596007126.do
* http://wickedlysmart.com/head-first-design-patterns/

The original example code is written in Java can be found here: https://github.com/bethrobson/Head-First-Design-Patterns
