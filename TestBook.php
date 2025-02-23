<?php
include 'Book.php';


$author = new Author("Tan Ah Teck", "ahTeck@somewhere.com", "m");


$book = new Book("OOP in PHP", $author, 29.99, 5);


echo $book . "<br>"; 

echo "Book Name: " . $book->getName() . "<br>";
echo "Author: " . $book->getAuthor() . "<br>";
echo "Price: " . $book->getPrice() . "<br>";
echo "Quantity: " . $book->getQty() . "<br>";


$book->setPrice(35.99);
$book->setQty(10);

echo "Updated Price: " . $book->getPrice() . "<br>";
echo "Updated Quantity: " . $book->getQty() . "<br>";
?>
