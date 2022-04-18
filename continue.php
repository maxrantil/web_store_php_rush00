<?php
	session_start();
	if (empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'], $_GET['id']);
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
			$file = fopen("private/items.csv", "a");
			$csv = array_map('str_getcsv', file('private/items.csv'));
			foreach ($csv as $key => $elem) 
			{
				if ($elem[0] == $_GET['id']) 
				{
					echo $csv[$key][2];
					$cart_file = "private/cart.csv";
					if (!$cart_file)
					{
						file_put_contents($cart_file, "");
					}
					else{
						file_put_contents($cart_file, $csv[$key][2]."\n", FILE_APPEND);
					}
				}
			}
			fclose($file);
			echo  " SUCCESSFULLY ADDED TO YOUR ACCOUNT DEAR";
		?>
	<br>
	<br>
		<a href="cart.php">View shopping cart</a>
	<br>
	<br>
	<a href="index.php">Continue shopping</a>
	</body>
</html>