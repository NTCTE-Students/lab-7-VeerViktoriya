<?php
$cookie_session_id = '12';
setcookie($cookie_session_id, time() + (3600*24));
setcookie($cookie_session_id, time() - (3600*24));

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_session_id])) {
			    print("Куки не установлены!");
                header('Location: to.php');

			} else {
			    print("Куки '{$cookie_loggedin}' установлены!<br>");
			   
			}
		?>
	</body>
</html>
