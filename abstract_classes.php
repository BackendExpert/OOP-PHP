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
            return "This bike is 1st Fastest in World. The bike is $this->model and color is $this->color .<br>";
        }
    }

    class bmw extends bike{
        public function intro() : string{
            return  "This bike is 2nd Fastest in World. The bike is $this->model and bike color is $this->color .<br>";
        }
    }

    $yamaha = new yamaha("yamaha", "orange");
    echo $yamaha->intro();
    $bmw = new bmw("bmw", "white");
    echo $bmw->intro();
?>