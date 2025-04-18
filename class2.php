<?php
class Book {
    // Properties
    private $title;
    private $author;
    private $price;
    public function setDetails($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    public function displayDetails() {
        return "Title: $this->title,<br> 
        Author: $this->author,  <br>
        Price: \$$this->price";
    }
}
$myBook = new Book();
$myBook->setDetails("Ramayan", "Valmiki", 10.99);
echo $myBook->displayDetails();
?>
