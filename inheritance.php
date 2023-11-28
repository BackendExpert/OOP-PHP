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

    class bmw extends Car{
        public function car_infor(){
            echo "This car is BMW i8";
        }
    }

    $toyota = new Car("Abc", "silver", "toyota");    
    $bmw = new bmw("i8", "white", "BMW");
    echo "<br>";
    $bmw->car_infor();
    
?>
