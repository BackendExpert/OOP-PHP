<?php 
    class car{
        public $color;
        public $brand;
        
        public function __construct($color, $brand){
            $this->color = $color;
            $this->brand = $brand;
        }
        public function __destruct(){
            // this fuction is call in last of the script
            echo "Car color is {$this->color} and Brand is {$this->brand}";
        }
    }

    $Audi = new car("White", "Audi");

?>