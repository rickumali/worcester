<!doctype html>
<html>
<body>
<h1>Math Game</h1>
<form action="mathtest.php" method="post">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $val1 = $_POST["val1"];
  $val2 = $_POST["val2"];
  $answer = $_POST["answer"];
  if ($val1 * $val2 == $answer) {
    echo "<p>Got the last product right!</p>";
    $val1 = rand(1, 10);
    $val2 = rand(1, 10);
  } else {
    echo "<p>Failure! Try again.</p>";
  }
} else {
  $val1 = rand(1,10);
  $val2 = rand(1,10);
}
?>
<label for="answer">What is <?=$val1?> * <?=$val2?>?</label>
<input type="hidden" name="val1" value=<?=$val1?>>
<input type="hidden" name="val2" value=<?=$val2?>>
<input id="answer" name="answer" value="Enter answer">
</form>
</body>
</html>
