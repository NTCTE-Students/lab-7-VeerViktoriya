
<?php

$cookie_countryy = 'Russia';

setcookie($cookie_countryy, time() + (3600*24));

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_countryy])) {
			    print("Куки '{$cookie_countryy}' не установлены!");
			} else {
			    print("hi'{$cookie_countryy}' ");
				
			}
		?>
	</body>
</html>
