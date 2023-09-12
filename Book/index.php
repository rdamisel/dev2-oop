<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <!-- Form for user input -->
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
        <br><br>
        <label for="publisher">Publisher</label>
        <input type="text" name="publisher" id="publisher">
        <br><br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <br><br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>

<?php
// Include the external PHP class "Book.php"
include "Book.php";

// Check if the form is submitted
if(isset($_POST['btn_submit'])){
    // Retrieve user input from the form
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $price =  $_POST['price'];

    // Create an instance of the "Book" class
    $book = new Book($title, $author, $publisher, $price);

    // Set the properties of the book object with user input
    // $book->setTitle($title);
    // $book->setPublisher($publisher);
    // $book->setPrice($price);

    // Display the book information using the "getTitle," "getPublisher," and "getPrice" methods
    echo $book->getTitle()."<br>";
    echo $book->getAuthor()."<br>";
    echo $book->getPublisher()."<br>";
    echo $book->getPrice()."<br>";
}
?>
