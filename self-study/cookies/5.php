<?php

$cookie_name = 'visited';
$cookie_visited = 0;

setcookie($cookie_name, $cookie_visited, time() + (3600*2), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
        $cookie_visited++;
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' .$cookie_visited);
                $cookie_visited++;
			}
        setcookie($cookie_name, $cookie_visited, time() + (3600*2), '/');

		?>
	</body>
</html>