<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>
<?php
function calculateArea($width, $height) {
    return $width * $height;
}

$w = 4;
$h = 2;
$area = calculateArea($w, $h);

echo "<p>The area of a rectangle with a width of $w and $h is $area</p>";
?>
</body>
</html>