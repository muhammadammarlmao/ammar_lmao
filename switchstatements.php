<?Php include 'header.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME TO SWITCH STATEMENTS </title>
</head>
<body>
    <h1>SWITCHING STATEMENTS</h1>
<?php 
$grade='D';

switch ($grade){
    case "A";
echo 'YOU ARE KING';
break; 
case 'B';
echo 'YOU ARE NOT A KING';
default :
echo "you are slave";
} 

?>


</body>
</html>