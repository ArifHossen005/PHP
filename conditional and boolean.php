<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$name = "John Doe";
$correctName = true; 

?>

<h1>
    <?php 
        if($correctName){
            $message = "My name is ".$name;
        
        } else {
            $message = "I don't know my name";
        }
    ?>

    <h1>
        <?php 
            echo $message;
        ?>
    </h1>
    
</body>
</html>