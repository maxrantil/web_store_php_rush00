<?php
	$itemfile = 'private/items.csv';
	$dir = 'private';
	$id = $_POST['id'];
	$category = $_POST['category'];
	$name = $_POST['name'];
	$price = $_POST['price']; 
	$img_path = $_POST['img_path']; 
	$submit = $_POST['submit'];  

	if ($id && $category && $name && $price && $img_path && $submit === 'OK')
	{
		if (!file_exists($dir))
		{
			mkdir($dir, 0755, true);
		}
		if (!$itemfile)
		{
			file_put_contents($itemfile, "");
		}
		$arr_csv = array($id, $category, $name, $price, $img_path);
		$file = fopen("private/items.csv", "a");
		fputcsv($file, $arr_csv);
		fclose($file);
		echo "OK\n";

	}	
	else
		echo "ERROR\n";
?>