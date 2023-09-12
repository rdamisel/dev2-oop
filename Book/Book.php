<?php

class Book {
    /* Properties */
    
    // Private property to store the title of the book
    private $title;

    // Public property to store the author of the book
    public $author;

    // Private property to store the publisher of the book
    private $publisher;

    // Private property to store the price of the book
    private $price;


    public function __construct($new_title, $new_author, $new_publisher, $new_price){
        $this->title = $new_title;
        $this->author = $new_author;
        $this->publisher =  $new_publisher;
        $this->price = $new_price;
    }
    /* Methods */

    // // Public method to set the title of the book
    // public function setTitle($new_title) {
    //     $this->title = $new_title;
    // }

    // // Public method to set the publisher of the book
    // public function setPublisher($new_publisher) {
    //     $this->publisher = $new_publisher;
    // }

    // // Public method to set the price of the book
    // public function setPrice($new_price) {
    //     $this->price = $new_price;
    // }

    // Public method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    // Public method to get the publisher of the book
    public function getPublisher() {
        return $this->publisher;
    }

    // Public method to get the price of the book
    public function getPrice() {
        return $this->price;
    }

    // Public method to display the author of the book
    // public function displayAuthor() {
    //     return $this->author;
    // }

    // Private method to display title, publisher, and price of the book
    // private function displayValues() {
    //     echo "Title: " . $this->title . "<br>";
    //     echo "Publisher: " . $this->publisher . "<br>";
    //     echo "Price: " . $this->price . "<br>";
    // }
}

// Uncomment the following lines to create a Book instance and use its methods and properties
// $web_development = new Book;
// $web_development->author = "John Doe";
// echo "Author: " . $web_development->displayAuthor() . "<br>";

// $web_development->setTitle("Web Development Book");
// $web_development->setPublisher("Kredo 2023");
// $web_development->setPrice("500");

// echo "Title: " . $web_development->getTitle(). "<br>";
// echo "Publisher: " . $web_development->getPublisher(). "<br>";
// echo "Price: " . $web_development->getPrice(). "<br>";


// $web_development = new Book("Web Development", "Jane Smith", "KREDO 2023", 30);
// echo $web_development->getTitle();
?>
