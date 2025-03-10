<?php

$cookie_font_size = 13;
$cookie_layout = 'center';

setcookie($cookie_font_size, $cookie_layout, time() + (3600*24), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_font_size]) && !isset($_COOKIE[$cookie_layout]) ) {
			    print("Куки не установлены!");
			} else {
			    print("Куки '{$cookie_font_size}' установлены!<br>");
			    print("Куки '{$cookie_layout}' установлены!<br>");

			}
		?>
	</body>
</html>
