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
   <br>
<?php
	echo "HERE IS YOUR BASKET DEAR: ";
	
		$cart_content = array_map('str_getcsv', file('private/cart.csv'));
		foreach ($cart_content as $elem)
		{
			echo $elem[0] . ", " . "\n";
		}

?>
<a href="empty_basket.php">Empty Basket</a>
	</body>
</html>