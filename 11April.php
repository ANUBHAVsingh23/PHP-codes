<!DOCTYPE html>
<html>
<body>

<form method="post">
  Enter a number: <input type="number" name="num">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $a = 0;
    $b = 1;

    echo "Fibonacci Series up to $num:<br>";

    for ($i = 0; $i < $num; $i++) {
        echo $a . " ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}
?>
<form method="post">
  Enter a string: <input type="text" name="text">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $reversed = "";
    
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed .= $text[$i];
    }
    
    echo "Reversed String: $reversed";
}
?>
<form method="post">
  Enter image URL: <input type="text" name="image_url">
  <input type="submit" value="Display Image">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["image_url"])) {
    $image_url = htmlspecialchars($_POST["image_url"]);
    echo "Here is the image you provided:<br>";
    echo "<img src='$image_url' width='300'>";
}
?>
</body>
</html>

