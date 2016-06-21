<!doctype html>
<html>
<body>
<h1>Math Game</h1>
<form action="mathtest.php" method="post">
<?php
var_dump(rand(100,1000));
?>
What is 107 + 20?
<input name="answer" value="Enter answer">
</form>
</body>
</html>
