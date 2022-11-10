<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$item1=$_POST["item1"];
$item2=$_POST["item2"];
$item3=$_POST["item3"];
$method=$_POST["shipping"];
$username=$_POST["username"];
$password=$_POST["password"];
$total1=$item1*200;
$total2=$item2*20000;
$total3=$item3*200000;
$methodList=[0,50,5];
if($method=="Free seven days")
{
  $methodCost=0;
}
if($method=="$50.00 overnight")
{
  $methodCost=50;
}
if($method=="$5.00 three days")
{
  $methodCost=5;
}
$total=$total1+$total2+$total3+$methodCost;
if($item1=="")
{
  $item1=0;
}
if($item2=="")
{
  $item2=0;
}
if($item3=="")
{
  $item3=0;
}
echo "<table align='center'><tbody>";
echo "<tr><th>Dear user".$username."with password".$password.": Welcome! Thank you for your purchase!</th></tr>";
echo "<tr><td></td><td>Quantity</td><td>Price</td><td>Sub Total</td></tr>";
echo "<tr><td>Bike</td><td>".$item1."</td><td>$200.00</td><td>$".$total1."</td></tr>";
echo "<tr><td>Car</td><td>".$item2."</td><td>$20000.00</td><td>$".$total2."</td></tr>";
echo "<tr><td>Airplane</td><td>".$item3."</td><td>$200000.00</td><td>$".$total3."</td></tr>";
echo "<tr><td>Shipping</td><td>".$method."</td><td>$".$methodCost."</td><td>$".$methodCost."</td></tr>";
echo "<p>&nbsp;</p>";
echo "<tr><td></td><td></td><td></td><td>Total:".$total."</td></tr>";
echo "</tbody></table>";
?>
