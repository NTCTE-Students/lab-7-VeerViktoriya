<?php
$cookie_loggedin = 'loggedin';
setcookie($cookie_loggedin, time() + (3600*24));

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_loggedin])) {
			    print("Куки не установлены!");
                echo "<script>self.location='to.php';</script>";
			} else {
			    print("Куки '{$cookie_loggedin}' установлены!<br>");
			   
			}
		?>
	</body>
</html>
