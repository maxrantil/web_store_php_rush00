<?php
	header('Content-type: text/html');
	session_start();
?>	
<!DOCTYPE html>
<html>
	<head>
  		 <title>Movie CENTER</title>
  		 <link rel="stylesheet" href="style.css">
	</head>
<body>

        <!--Header-->
  <header class="flex-items">
        <img src="https://i.ibb.co/0nrTtwK/36c404636e1440c3b9fa549122d23b97.png">
      <nav>
		  <span><a href="register.html">Login<a></span>
          <span><a href="#about">About</a></span>
          <span><a href="#Action">Movies</a></span>
          <span><a href="account.php">Account</a></span>
      </nav>
   </header>

      <!--Main-->
  <div class="main">

      <!--MISSION-->

   <div id="about" class="flex-items">
     <div class="content">
      <h2>LE SPECIALISTE DE LA LOCATION DE FILM</h2>
       <h4>Depuis 1962</h4>
      </div>
     </div>
          <!--Shop-->

   <div id="Shop">
      <h2></h2>
      <h4></h4>
     <div class="flex-items product">
        <div class="product">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgM74qhRSiTcHT6oAuJ8MBS8VrrJiWnQj5Sg&usqp=CAU">
        </div>
        <div class="product">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgM74qhRSiTcHT6oAuJ8MBS8VrrJiWnQj5Sg&usqp=CAU">
          <p></p>
        </div>
        <div class="product">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgM74qhRSiTcHT6oAuJ8MBS8VrrJiWnQj5Sg&usqp=CAU">
          <p></p>
        </div>
     </div>
   </div>
          <!--action-->

   <div id="Action">
      <h2>FIND US</h2>
      <div class="flex-items action">
        <div class="action">
        </div>
        <div class="action">
          <p></p>
		  <div class="flex-container">
			<?php function adddiv($title, $price, $img_path, $id) 
				{
						echo "<div>
						<p><button>$price</button></p>
						<a href=\"#\"><img width='20%' src=\"$img_path\" alt=\"$title\" title=\"$title\"></a>
						<br>
						<a href=\"./continue.php?id=$id\">
						<p><button>Add to Cart</button></p>
                        </a>
						</div>";
				} 
			?>
		</div>
			<?php
				$file = fopen("./private/items.csv", "r");
				while(! feof($file))
					$array[] = fgetcsv($file);
				fclose($file);

				for ($i = 0; $i < sizeof($array); $i++) 
				{
					$id = $array[$i][0];
					$category = $array[$i][1];
					$title = $array[$i][2];
					$price = $array[$i][3];
					$img_path = $array[$i][4];
					adddiv($title, $price, $img_path, $id);
				} 
			?>
          <p></p>
        </div>
      </div>
    </div>
  </div>

      <!--Contcact-->

    <div id="Contact">
         <h2></h2>
         <h5>contact</h5>
         <h5>ccariou/mrantil</h5>
    </div>

       <!--Copyright-->

    <footer>
      <h5>copyright:ccariou/mrantil</h5>
    </footer>
</body>
</html>
