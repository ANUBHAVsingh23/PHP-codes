<?php
class Book {
    public $title;
    public $author;
    public $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to display book details
    public function displayDetails() {
        return "Title: $this->title, Author: $this->author, Price: $" . number_format($this->price, 2);
    }
}

// Creating a book instance
$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Book Details</h1>
    <p><?php echo $book->displayDetails(); ?></p>
</body>
</html>
