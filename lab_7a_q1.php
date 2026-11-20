<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
<?php
    $name    = "TASNIM MOHAMED IBRAHIM HASSAN ";
    $matric  = "AI250030";
    $course  = "WEB DEVELOPMENT";
    $year    = "y2";
    $address = "UTHM Campus";
?>
<table border="1" cellpadding="5">
    <tr><td>Name</td>          <td><?php echo $name; ?></td></tr>
    <tr><td>Matric number</td> <td><?php echo $matric; ?></td></tr>
    <tr><td>Course</td>        <td><?php echo $course; ?></td></tr>
    <tr><td>Year of study</td> <td><?php echo $year; ?></td></tr>
    <tr><td>Address</td>       <td><?php echo $address; ?></td></tr>
</table>
</body>
</html>