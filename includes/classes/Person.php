<?php
    class Person{
        public $name;
        public $desc;

        public static $counter;

        public function __construct($name, $desc)
        {
            $this->name = $name;
            $this->desc = $desc;

            self::$counter++;
        }
    }