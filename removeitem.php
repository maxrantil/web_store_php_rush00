<?php
if ($_POST['submit'] == "ok")
{
		$file = fopen("private/items.csv", "a");
		$csv = array_map('str_getcsv', file('private/items.csv'));
		foreach ($csv as $key => $elem) 
		{
			if ($elem[0] == $_POST['id']) 
			{
				unset($csv[$key]);
			}
		}
		$file_pointer = "private/items.csv";
		if (!unlink($file_pointer)) {
			echo ("$file_pointer cannot be deleted due to an error");
		}
		else {
			echo ("$file_pointer has been deleted");
		}
		$itemfile = './private/items.csv';
		foreach ($csv as $elem) 
		{
			$line = $line . implode(',', $elem) . "\n";
		}
		file_put_contents($itemfile, $line);
		fclose($file);
		echo "OK\n";

	}	
	else
		echo "ERROR remove item\n";
?>