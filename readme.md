## Deep dive: symfony
You have gotten far into PHP, but until now you have written all your code yourselves. While this great for learning and understand your applications, in the real world the projects you will be working on will be complex, and there will not be enough time to write every component every time from scratch.

There is also the matter of quality, while you can be a really good programmer, in the end you are always only one person - it is very likely that a couple bugs might occur in simple components that you write yourself.

Wouldn't it be better if we could reuse other programmers there code, when we know that an entire community has looked into each line of code, and the best minds have thought together what the best practices and structures are to write you projects in?

This is where a framework comes in!

A framework is a collection of ***best practics*** and ***reuasable components***, like formvalidation, logging, a way to connect to the database, ...

PHP has a vibrant community with many frameworks in it's ecosystem. Popular frameworks include Symfony, Zend Expressive, Cake PHP, CodeIgniter and Laravel.

We are going to learn symfony in a series of short chapters, and in the end a large Consolidation challange is waiting for you to test your Symfony skills!

Many of the concepts you will be learning the following days are not specific to Symfony, almost all PHP framework use simular concepts, and you can find these best practics even outside of the PHP ecosystem. 

This will give you the ability to quickly switch between frameworks because you already know the concepts and theory behind it.

## What is symfony?
Symfony is an open source PHP framework with MVC architecture. It is one of the most popular application frameworks among the open source developers’ community. It is used to build high-performance complex web applications. It has an out of the box integration with Doctrine, an ORM layer to connect to your database.

We selected Symfony above the other frameworks because it has many components working out of the box, and has [very good documentation](https://symfony.com/doc/current/index.html).

This doesn't mean that Symfony is the best framework out there.

## The best doesn't exist!
Different challenges require different tools. For example, for a large projects Symfony might in some use cases be the best choice, but maybe if you only want to make a one page project you want a lighter framework.

Maybe if you are using a frontend project with vue.js you want to use [Laravel](https://laravel.com/), because it has an out of the box integration with this tool.
 
Maybe your project don't need an MVC model, for example because it is only a REST api... again another framework might pop up here, like [Apigility](https://apigility.org/).

> It is not the hammer that matters: it is the carpenter!

![Carpenter Felix](fix-it-felix.jpeg)