<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus excepturi ullam voluptatibus eaque quasi, nulla tempore, unde sit nesciunt, sunt hic ipsam ea quas vel a necessitatibus nam modi officiis.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum). "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>";
echo "<p>". strtoupper($loremIpsum) . "</p>";
echo "<p>". strtolower($loremIpsum) . "</p>";
?>