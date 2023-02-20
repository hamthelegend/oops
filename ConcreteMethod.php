<?php

    abstract class AbstractClass {

        abstract function abstractMethod();

        function concreteMethod(): void {
            echo "Hello";
        }

    }

    class ConcreteClass extends AbstractClass {

        function abstractMethod() {
            // TODO: Implement abstractMethod() method.
        }

    }

    $conc = new ConcreteClass();
    $conc->concreteMethod();