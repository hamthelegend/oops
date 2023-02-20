<?php

    abstract class Shape {
        abstract function getSurfaceArea();

        abstract function getVolume();
    }

    class Sphere extends Shape {

        protected float $radius;

        /**
         * @param $radius
         */
        public function __construct($radius) {
            $this->radius = $radius;
        }


        function getSurfaceArea(): float|int {
            return 4 * M_PI * pow($this->radius, 2);
        }

        function getVolume(): float|int {
            return 4 / 3 * M_PI * pow($this->radius, 3);
        }

        /**
         * @return float | int
         */
        public function getRadius(): float|int {
            return $this->radius;
        }
    }

    class Cube extends Shape {

        protected float $sideLength;

        /**
         * @param $sideLength
         */
        public function __construct($sideLength) {
            $this->sideLength = $sideLength;
        }


        function getSurfaceArea(): float|int {
            return 6 * pow($this->sideLength, 2);
        }

        function getVolume(): float|int {
            return pow($this->sideLength, 3);
        }

        /**
         * @return float | int
         */
        public function getSideLength(): float|int {
            return $this->sideLength;
        }
    }