<?php
	include'user_page.php';
	session_start();

	function auth($login, $passwd) 
	{
		$contents = file_get_contents('./private/passwd');
		$check = unserialize($contents);
		foreach ($check as $user => $elem) 
		{
			if ($elem['login'] == $login && $elem['passwd'] == hash('whirlpool', $passwd)) {
				return TRUE;
			}
		}
		return FALSE;
	}

    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK") 
	{
		if (file_exists('./private/passwd')) 
		{
			$contents = file_get_contents('./private/passwd');
			$check = unserialize($contents);
			foreach ($check as $elem)
			{
				if ($elem['login'] == $_POST['login'])
				{
					if ($_POST['login'] == 'admin' && $_POST['passwd'] == 'admin' && $_POST['submit'] == "OK")
					{
						header("Location: adminpage.php");
						return ;
					}
					else if (auth($_POST['login'], $_POST['passwd']) == TRUE) 
					{
						$_SESSION['id'] = $_POST['login'];
						first_or_not(1); 
						return ;
					}
					else 
					{
						echo "ERROR wrong password for account\n";
						return ;
					}
				}
			}
		}
		mkdir('./private', 0775);
		$user['login'] = $_POST['login'];
		$user['passwd'] = hash('whirlpool', $_POST['passwd']);
		$check[] = $user;
		file_put_contents('./private/passwd', serialize($check));
		first_or_not(0); 
    }
	else 
	{
		echo "ERROR (with create page)\n";
	}
?>
