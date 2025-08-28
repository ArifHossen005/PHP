<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<h1>List of names</h1>

<?php 


$names = ["John Doe", "Jane Smith", "Alice Johnson","Bob Brown"];
?>
<!-- <?php foreach ($names as $name)
{
    echo "<li>$name[i]</li>";
}

?> -->


<ul>

    <?php
    foreach($names as $name){
        echo "<li>$name</li>";
    }

?>

</ul>
     
</body>
</html>