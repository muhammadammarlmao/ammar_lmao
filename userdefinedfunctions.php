<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functionss</title>
</head>
<body>
    <?php  
   $MARKS = 304;
   $TOTAL = 505;
   
 function returnproduct($MARKS,$TOTAL) {
    $prod=$MARKS * $TOTAL;
  return $prod ;

}

  $return_value = returnproduct(10,200);
  echo "$return_value";
  include 'header.php';
?>
</body>
</html>