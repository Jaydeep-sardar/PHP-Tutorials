<?php
// final keyword in PHP

final class BaseClass {
    public function show() {
        echo "This is a final class. It cannot be extended.<br>";
    }
}

// The following will cause an error:
// class ChildClass extends BaseClass {}

class ParentClass {
    final public function display() {
        echo "This is a final method. It cannot be overridden.<br>";
    }
}

class ChildClass extends ParentClass {
    // The following will cause an error:
    // public function display() {}
}

$base = new BaseClass();
$base->show();

$child = new ChildClass();
$child->display();
?>
