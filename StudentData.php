<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name ="Bahadur";
    $class="12th";
    $hindi="80";
    $english="75";
    $physics="78";
    $chemistry="90";
    $math="90";
    $total =$hindi+$english+$physics+$chemistry+$math;
    $percent=$total/500*100;
    
    echo "<font color ='red'>The total number is ,$total</font>";
    echo "<br><font color='red'>The percentage is ,$percent</font>";
    ?>
</body>
</html>