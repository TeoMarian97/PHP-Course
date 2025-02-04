<?php
setcookie('username', '', time() - 3600, '/'); //To delete cookie, you set expiry date in the past
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="page.php">Go to page.php</a>
  </p>

</body>

</html>