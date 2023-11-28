<?php 
    abstract class bike{
        public $model;
        public $color;

        public function __construct($model, $color){
            $this->model = $model;
            $this->color = $color;
        }
        abstract public function intro() : string;
    }


    class yamaha extends bike{
        public function intro() : string{
            return "This bike is 1st Fastest in World. The bike is $this->name and color is $this->color .";
        }
    }

?>