<?php


$servername = "localhost";
$username = "root";
$password = "";
$database ="new";

$conn = mysqli_connect($servername, $username, $password,$database);

$sql="INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES(1, 'Ritika', 'ritika@gmail.com', 50000)";
$sql="INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(2, 'Arya', 'arya@gmail.com', 30000),
(3, 'Rishabh', 'rishabh@gmail.com', 40000),
(4, 'Nimisha', 'nimisha@gmail.com', 50000),
(5, 'Nikki', 'nikki@gmail.com', 40000),
(6, 'Swati', 'swati@gmail.com', 30000),
(7, 'Prasant', 'prasant@gmail.com', 50000),
(8, 'Rashmi', 'rashmi@gmail.com', 40000),
(9, 'Selena', 'selena@gmail.com', 30000)";
$sql="INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES(10, 'Taylor', 'taylor@gmail.com', 30000)";

$result=mysqli_query($conn,$sql);


?>