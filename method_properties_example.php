<?php
// Methods and properties in PHP OOP

class Book {
    public $title;
    public $author;

    public function setDetails($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails() {
        return "Title: $this->title, Author: $this->author";
    }
}

$book = new Book();
$book->setDetails("1984", "George Orwell");
echo $book->getDetails();
?>
