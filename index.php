<?php 
    class car{
        public $color;
        public $brand;
        
        public function __construct($color, $brand){
            $this->color;
            $this->brand;
        }
        public function __destruct(){
            echo "Car color is {$this->color} and Brand is {$this->brand}";
        }
    }

    

?>