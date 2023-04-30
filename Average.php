<html>
<head>
<title>PHP Program To read the marks of three subjects and display the Total, Avg and Class</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter English marks"/>
</td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter Maths marks"/>
</td>
</tr>
<tr>
<td> <input type="text" name="num3" value="" placeholder="Enter Science marks"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$english = $_POST['num1'];
$maths = $_POST['num2'];
$science = $_POST['num3'];
$precision = 4;
$total = ($english + $maths + $science); // Compute total marks
$average = number_format($total/3, $precision); //compute the average of total marks
echo " Total marks of three subjects = ".$total ."";
echo " Average marks of three subjects = ".$average ."";
if($total<35 || $english<35 || $maths<35 || $science<35)
{
echo "Fail";
}
else
if($average>=60 && $average<70)
{
echo "Third Class";
}
else
if($average>=70 && $average<80)
{
echo "Second Class";
}
else
if($average>=80 && $average<95)
{
echo "First Class";
}
else
{
echo "Distinction";
}
return 0;
}
?>
</body>
</html>