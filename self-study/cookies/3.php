<?php

$cookie_name = 'preferences';
$cookie_value = 'dark_mode';

setcookie($cookie_name, $cookie_value, time() + (60*60*24*7), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' .$cookie_value);
			}
		?>
	</body>
</html>