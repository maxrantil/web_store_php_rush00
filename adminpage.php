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
	if ($_POST['remove'] == "remove")
	{
		$contents = file_get_contents('./private/passwd');
		$check = unserialize($contents);
		foreach ($check as $user => $elem) 
		{
			if ($elem['login'] == $_POST['useraccount']) 
			{
				$check[$user]['login'] = "";
			}
		}
		file_put_contents('./private/passwd', serialize($check));
	}
?>

HELLO ADMIN
<br/>
USER
<br/>
<form action="adminpage.php" method="POST">
		 Useraccount: <input type="text" name="useraccount" value ="" />
			 <input type="submit" name="remove" value="remove"/>
		 </form>
<a href="private/passwd"><p> USER LIST</p></a> 
<br>
ITEMS
<br/>
<form action="createitem.php" method="POST">
		id: <input type="int" name="id" value ="" />
		<br/>
		category: <input type="text" name="category" value =""/> 
		<br>
		name: <input type="text" name="name" value ="" />
		<br/>
		price: <input type="float" name="price" value ="" />
		<br>
		img_path: <input type="float" name="img_path" value ="" />
		<br>
		<input type="submit" name="submit" value="OK"/>
	</form>
	</body>
<br>
<form action="removeitem.php" method="POST">
		remove id: <input type="int" name="id" value ="" />
			 <input type="submit" name="submit" value="ok"/>
		 </form>
		 <a href="private/items.csv"><p> MOVIE LIST</p></a>  
</body></html>