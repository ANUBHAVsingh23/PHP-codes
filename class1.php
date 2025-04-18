<?php
class Book {
    private $title;
    private $author;
    private $price;

    // Constructor
    public function __construct($title = "", $author = "", $price = 0.0) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to set book details
    public function setDetails($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to display book details
    public function displayDetails() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: $" . number_format($this->price, 2) . "<br>";
    }
}
$book1 = new Book("Ramayana", "Valmiki", 10.99);
$book1->displayDetails();

$book2 = new Book();
$book2->setDetails("Godan", "Munshi Premchand", 8.99);
$book2->displayDetails();
?>
