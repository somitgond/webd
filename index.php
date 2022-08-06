<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rupees to Dollar convertor</title>
</head>
<body>
    <?php
    if(isset($_POST['rup'])){
        $doll=80*$_POST['rup'];
    }else{
        $doll=1;
    }
    ?>
    <h1> Welcome to our website </h1>
    <p> You can convert your rupees to dollar using our service </p>
<form method="post" action='index.php' >
    <input type="number" name="rup" placeholder="Enter rupees">
    <input type="submit" >
</form>
<?php 
    echo "<p>Your amount in Dollar is $doll<p><br>";
?>
</body>
</html>
