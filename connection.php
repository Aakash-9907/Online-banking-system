<?php

$username ="root";
$password = "";

$servername ="localhost";

$db ="akki";

$conn = mysqli_connect($servername ,$username,$password, $db);


if (!$conn)
{
    ?>
   <script>  
   alert ("connection failed"); 
   </script>

<?php
}




?>