<?php
  $row=100;
  $col=100;
  echo "<h1>Here is a 100 x 100 multiplication table: </h1>";
  echo "<table border=\"1px solid black\" border-collapse=\"collapse\">";
  for($i=0;$i<=100;$i++)
  {
    echo "<tr>";
    if($i==0)
    {
      echo "<th></th>";
    }
    else
    {
      echo "<th>$i</th>";
    }
    for($j=1;$j<=100;$j++)
    {
      if($i==0)
      {
        echo "<th>$j</th>";
      }
      else
      {
        $result=$i*$j;
        echo "<th>$result</th>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
?>
