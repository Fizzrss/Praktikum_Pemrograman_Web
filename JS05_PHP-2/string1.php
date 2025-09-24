<?php
$loremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Libero facere esse reprehenderit? Natus officia totam iusto! Quod, 
    dolore cupiditate quidem rerum amet numquam architecto, at, sed 
    quae expedita temporibus minima.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen( $loremIpsum ) . "<br>";
echo "Panjang kata: " . str_word_count( $loremIpsum ) ."<br>";
echo "<p>". strtoupper( $loremIpsum ). "</p>";
echo "<p>". strtolower( $loremIpsum ) . "</p>";
?>

