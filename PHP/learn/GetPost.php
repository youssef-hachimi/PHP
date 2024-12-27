<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!-- <form action="GetPost.php" method="get">
        <input type="text" name="username" id="" required placeholder="username" >
        <br>
        <input type="password" name="password" id="" required placeholder="your password">
        <br>
        <input type="submit" value="Login">
    </form> -->

    <!-- <form action="GetPost.php" method="post">
        <label >quantity: </label>
        <input type="number" name="quantity" id="">
        <input type="submit" value="total">
    </form> -->
    
    <form action="GetPost.php" method="post">
        <label >A: </label>
        <input type="text" name="a" id="a">
        <input type="submit" value="total">
    </form>

</body>
</html>




<?php
// echo $_GET["username"] ."<br>"; 
// echo $_GET["password"] ."<br>"; 

// echo $_POST["username"] ."<br>"; 
// echo $_POST["password"] ."<br>"; 
// $item = "pizza";
// $price = 3.50;
// $quantity = $_POST["quantity"];
// $total = null;

// $total = $quantity * $price;

// echo "You have orderd $quantity x $item /s ";
// echo "Your total price is : $total $";


//math functions
$a = $_POST["a"];
$total = null;



// $total = abs($a);
// $total = round($a);
// $total = floor($a);
// $total = ceil($a);
$total = floor($a);





echo $total;
?>