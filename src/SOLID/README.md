## SOLID 

Those principles where developed to allow the user to build software application that can be easily extendable and maintable . 

### Single Responsibility Principle

Every class should only do one single job 

### Open/Closed Principle 

One of the most principles, and it state that every class should be open for extension and closed for modification .

```php
php src/SOLID/OpenClosedPrinciple.php
```

### Liskov Substution principle

It's state that every subclass can be replaceable be it's parent class 
"If it look like a duck, and quacks like a duck but need batteries to move, then you probably have the wrong abstraction"

The most famous example is the rectange and the square example, therotically the rectangle is a square, but if we want to calculate the area for square we can width*height(they are the same), but for the recatange the width and height if different so we need to extract to interface .

This principle is just an extension of the Open Close Principle and it means that we must make sure that new derived classes are extending the base classes without changing their behavior.

We should implement the right abstraction to solve this problem

### Interface Seggregation Principle 

It's state that any client shouldn't implement interface with methods that doesn't use .

```php
src/SOLID/InterfaceSegregation.php   // see this file for example
```

### Dependency Inversion Principle

First : High level module is the interface / abstraction that will be consumed directly by the presentation layer. Low level on the other hand are bunch of small modules (subsystems) help the high level do their work

It state that 

- High level module shouldn't depend on low level modules, and low level modules shouldn't depend high level modules, both should depends on abstraction . 
