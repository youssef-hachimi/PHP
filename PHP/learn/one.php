<?php
$name = "youssef";
$food = "pizza";
$email = "useremail@gmail.com";

$age = 19;
$users = 4;
$quantity = 5;

$gba = 3.5;
$price = 5.99;
$taxRate = 4.1; 

$online = true;
$total = null;

echo "Hello My name is $name<br>";
echo "I like $food <br>";
echo " My email is : $email<br>";

echo " I'm $age years old <br>";
echo "There are $users users online <br>";
echo "You would like to buy $quantity items <br>";

echo "Your gba is $gba <br>";
echo "Your order price is $price $ <br>";
echo "The sales tax rate is $taxRate % <br>"; 
if ($online == true){
    echo"The user is online Now !<br>";
}
echo "You have ordered $quantity x $food s"; 

$total = $quantity * $price;
echo "Your total is : $total $";






























?>