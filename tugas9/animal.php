<?php
Class Animal {
    public $name;
    public $legs = 4;
    public $cold_bloded = "no";

    public function __construct($name_){
        $this->name = $name_;
    }
}
