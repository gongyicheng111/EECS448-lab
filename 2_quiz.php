<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $prob1 = $_POST["prob1"];
  $prob2 = $_POST["prob2"];
  $prob3 = $_POST["prob3"];
  $prob4 = $_POST["prob4"];
  $prob5 = $_POST["prob5"];
  $answer=["Steam","Auchan","Lycoris Recoil","Windows 10","Autumn"];
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    echo "<h1>Time to publish the answer and your score!</h1>";
  }
  $choice=[$prob1,$prob2,$prob3,$prob4,$prob5];
  $correct=0;
  for($i=0;$i<5;$i++)
  {
    if($answer[$i]==$choice[$i])
    {
      $correct++;
    }
  }
  echo "<p>1. Which is a US company which sell games?</p>";
  echo "<p>Your answer: ".$choice[0]."</p>";
  echo "<p>Correct answer: ".$answer[0]."</p>";
  echo "<p>&nbsp;</p>";
  echo "<p>2. Which supermarket/shop is not here in Lawrence?</p>";
  echo "<p>Your answer: ".$choice[1]."</p>";
  echo "<p>Correct answer: ".$answer[1]."</p>";
  echo "<p>&nbsp;</p>";
  echo "<p>3. Which anime can be watched since summer this year (2022)?</p>";
  echo "<p>Your answer: ".$choice[2]."</p>";
  echo "<p>Correct answer: ".$answer[2]."</p>";
  echo "<p>&nbsp;</p>";
  echo "<p>4. Which system can't connect a saved BlueTooth device under/equal 3 clicks/slides?</p>";
  echo "<p>Your answer: ".$choice[3]."</p>";
  echo "<p>Correct answer: ".$answer[3]."</p>";
  echo "<p>&nbsp;</p>";
  echo "<p>5. Which season will give us an extra hour due to the change of the time?</p>";
  echo "<p>Your answer: ".$choice[4]."</p>";
  echo "<p>Correct answer: ".$answer[4]."</p>";
  echo "<p>&nbsp;</p>";
  echo "Correct Answer Count: ".$correct.", Score: ".($correct*20)."%.";
  if($correct==5)
  {
    echo "<h1>Congratulations! You are an expert of Lawrence, Anime, and Me!</h1>";
  }
?>
