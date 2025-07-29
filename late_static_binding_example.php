<?php
// Late static binding in PHP

class Base {
    public static function who() {
        echo __CLASS__ . "<br>";
    }
    public static function test() {
        static::who(); // Late static binding
    }
}

class Child extends Base {
    public static function who() {
        echo __CLASS__ . "<br>";
    }
}

Base::test();   // Output: Base
Child::test();  // Output: Child
?>
