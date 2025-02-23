<?php
include 'Author.php';


$author = new Author("Tan Ah Teck", "ahTeck@somewhere.com", "m");


echo $author . "<br>"; 

echo "Name: " . $author->getName() . "<br>";
echo "Email: " . $author->getEmail() . "<br>";
echo "Gender: " . $author->getGender() . "<br>";


$author->setEmail("tan.teck@updated.com");
echo "Updated Email: " . $author->getEmail() . "<br>";
?>
