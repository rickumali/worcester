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
} else {
  $val1 = rand(100,1000);
  $val2 = rand(1,100);
}
?>
What is <?=$val1?> + <?=$val2?>?
<input type="hidden" name="val1" value=<?=$val1?>>
<input type="hidden" name="val2" value=<?=$val2?>>
<input name="answer" value="Enter answer">
</form>
</body>
</html>
