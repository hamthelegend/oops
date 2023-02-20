<?php

    namespace html;

    class Car {
        protected $make;
        protected $model;
        protected $year;

        /**
         * @param $make
         * @param $model
         * @param $year
         */
        public function __construct($make, $model, $year) {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        /**
         * @return mixed
         */
        public function getMake() {
            return $this->make;
        }

        /**
         * @return mixed
         */
        public function getModel() {
            return $this->model;
        }

        /**
         * @return mixed
         */
        public function getYear() {
            return $this->year;
        }

        public function __toString() {
            return $this->getYear()." ".$this->getMake()." ".$this->getModel();
        }

    }