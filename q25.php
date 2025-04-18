<?php
class Movie {
    public $title;
    public $director;
    public $duration; // in minutes

    public function __construct($title, $director, $duration) {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
    }

    public function displayDetails() {
        return "Title: $this->title, Director: $this->director, Duration: $this->duration minutes";
    }
}

// Creating a movie instance
$movie = new Movie("Inception", "Christopher Nolan", 148);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Movie Details</h1>
    <p><?php echo $movie->displayDetails(); ?></p>
</body>
</html>
