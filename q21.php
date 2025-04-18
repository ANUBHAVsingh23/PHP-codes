<?php
class Book {
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayDetails() {
        return "Title: $this->title, Author: $this->author, Price: $" . number_format($this->price, 2);
    }
}

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        foreach ($this->books as $book) {
            echo $book->displayDetails() . "<br>";
        }
    }
}

// Creating library instance and adding books
$library = new Library();
$library->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99));
$library->addBook(new Book("1984", "George Orwell", 15.99));
$library->addBook(new Book("To Kill a Mockingbird", "Harper Lee", 12.99));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Library Books</h1>
    <div>
        <?php $library->displayBooks(); ?>
    </div>
</body>
</html>
