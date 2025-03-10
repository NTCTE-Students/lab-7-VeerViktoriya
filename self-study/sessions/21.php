<?php

session_start();


?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Добро пожаловать!</h2>
		<p>Привет, <?php print($_SESSION['username'] . $_SESSION['password']); ?>!</p>
        <a href="22.php">Выйти</a>
	</body>

</html>