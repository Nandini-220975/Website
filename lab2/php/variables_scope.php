c:\xampp\htdocs\website\php\string_functions.phpc:\xampp\htdocs\website\php\string_functions.php<?php
// String
$brandName = "Samsung";
echo "<br>Brand Name: $brandName";
// Integer
$totalProducts = 150;
echo "<br>Total Products: $totalProducts";
// Float
$price = 99999.99;
echo "<br>Sample Price: $price";
// Boolean
$isAvailable = true;
echo "<br>Product Available:" . ($isAvailable ? "Yes" : "No");

// Array
$categories = array("Mobiles", "Tvs", "watches", "earphones");
echo "<br>Categories : ";
print_r($categories);
//VARIABLE SCOPE

// Local Scope
function showLocalScope() {
    $name = "Electro Mart";
    echo "<br><br>Local Scope: $name";
}
showLocalScope();

// Global Scope
$rating = 4.4;
function showGlobalScope() {
    global $rating;
    echo "<br>Global Scope: $rating";
}
showGlobalScope();

//Static Scope
function visitCounter() {
    static $count = 0;
    $count++;
    echo "<br>Static Scope Visit Count: $count";
}

visitCounter();
visitCounter();
visitCounter();
?>