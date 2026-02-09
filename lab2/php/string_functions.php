<?php
$string = " Electronics Store ";
echo "<br>Length: " . strlen($string);
echo "<br>Word Count: " . str_word_count($string);
echo "<br>Reverse: " . strrev($string);
echo "<br>Uppercase: " . strtoupper($string);
echo "<br>Lowercase: " . strtolower($string);
echo "<br>Ucfirst: " . ucfirst(trim($string));
echo "<br>Ucwords: " . ucwords(trim($string));
echo "<br>Position of 'Store': " . strpos($string, "Store");
echo "<br>Replace 'Store' with 'Shop': " . str_replace("Store", "Shop", $string);
echo "<br>Substring (0,5): " . substr($string, 0, 5);
echo "<br>Trim: '" . trim($string) . "'";
echo "<br>Ltrim: '" . ltrim($string) . "'";
echo "<br>Rtrim: '" . rtrim($string) . "'";
$str1 = "Store";
$str2 = "store";

echo "<br>strcmp(): " . strcmp($str1, $str2);
echo "<br>strcasecmp(): " . strcasecmp($str1, $str2);
$userInput = "<script>alert('Hack');</script>";

echo "<br>htmlspecialchars(): " . htmlspecialchars($userInput);
echo "<br>addslashes(): " . addslashes($userInput);
?>