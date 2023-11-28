<?php 
    class Car{
        public $model;
        public $color;
        public $brand;

        public function __construct($model, $color, $brand){
            $this->model = $model;
            $this->color = $color;
            $this->brand = $brand;
        }

        public function __destruct(){
            echo "Car Model is {$this->model} and color is {$this->color} and also brand is {$this->brand}.";
        }
    }

?>
