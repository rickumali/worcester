<!doctype html>
<html>
<body>
<h1>Math Game</h1>
<form action="mathtest.php" method="post">
<?php
$val1 = rand(100,1000);
$val2 = rand(1,100);
?>
What is <?=$val1?> + <?=$val2?>?
<input name="answer" value="Enter answer">
</form>
</body>
</html>
