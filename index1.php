<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <?php
    $conn = mysqli_connect("localhost", "root", "", "witak");
    
    if(!$conn) {
        echo "Brak polaczenia";
        exit();

        mysql_iclose($conn);
    }
    ?> 
</body>
</html>