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

?>