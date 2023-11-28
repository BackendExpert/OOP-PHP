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

        public function __destruct()
    }

?>
