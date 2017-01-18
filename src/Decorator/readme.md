## What is going on ? 

Adapter Design pattern states that it allows you to translate one interface for use with another . 

In this example we have `Reader` interface that should implement `open` and `turnPage` .

Our `Book` class implements `Reader` interface .
 
Then we got a new Kindle which is Ebook and this ebook should should also `open` and `turnPage` . 
 
So in this case we create an adapter to alter this because : 

- Our Kindle class should contain two methods `turnOn` translated to `Open` and `clickScreen` which translate to `turnPage` .
- We Create an adapter to get the Ereader Interface and in this class we wrap on `open` and `turnPage` . 

*There is a great video that help us to understand this better*
https://laracasts.com/series/design-patterns-in-php/episodes/2
 
 
