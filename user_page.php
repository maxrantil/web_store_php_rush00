<?php
	session_start();
?>
<html>
<head>
   <title>Movie CENTER</title>
   <link rel="stylesheet" type="text/css"href="style.css">
</head>

<body>
	<header class="flex-items">
        <img src="https://i.ibb.co/0nrTtwK/36c404636e1440c3b9fa549122d23b97.png">
      <nav>
		  <span><a href="index.php">Return<a></span>
      </nav>
   </header>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <?php
		function first_or_not($var) 
		{
			if ($var)
			{
				echo "WELCOME BACK DEAR " . $_SESSION['id'] . " HELLO\n";
			}
			else
			{
				echo "WELCOME NEW USER " . $_POST['login'] . " HELLO\n";

			}
		}
?>
			<a href="index.php"><p>BACK TO THE WEBSITE</p></a>
</body>
</html>