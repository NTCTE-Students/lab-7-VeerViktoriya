<?php 
$cookie_theme = 'light';
setcookie($cookie_theme, time() + (3600*24));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Dark<input type="radio" name="theme" value="dark">
        Light<input type="radio" name="theme" value="light">
        <input type="submit" value="Izmenit'">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cookie_theme = htmlspecialchars($_POST['theme']);
        setcookie($cookie_theme, time() + (3600*24));

        print("theme: {$cookie_theme}<br>");
       
    }
    ?>
</body>
</html>