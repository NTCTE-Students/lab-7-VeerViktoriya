<?php

$cookie_name = 'language';
$cookie_value = 'English';

setcookie($cookie_name, $cookie_value, time() + (3600*2), '/');

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