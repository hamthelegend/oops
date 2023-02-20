<?php

//    class Fruit {
//        public $name;
//        public $color;
//
//        /**
//         * @return mixed
//         */
//        public function getName()
//        {
//            return $this->name;
//        }
//
//        /**
//         * @param mixed $name
//         */
//        public function setName($name)
//        {
//            $this->name = $name;
//        }
//
//        /**
//         * @return mixed
//         */
//        public function getColor()
//        {
//            return $this->color;
//        }
//
//        /**
//         * @param mixed $color
//         */
//        public function setColor($color)
//        {
//            $this->color = $color;
//        }
//
//    }

    class Fruit {

        private $name;
        private $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        /**
         * @return mixed
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getColor() {
            return $this->color;
        }

        public function getString() {
            return "(name: $this->name, color: $this->color)";
        }

    }

    $fruit = new Fruit(name: "Apple", color: "Red");
    echo $fruit->getString()."\n";

    $fruit2 = new Fruit(name: "Banana", color: "Yellow");
    echo $fruit2->getString()."\n";