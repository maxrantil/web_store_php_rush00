#!/usr/bin/php
<?php
	$pwfile= "private/passwd";
	file_put_contents($pwfile, "a:1:{i:0;a:2:{s:5:\"login\";s:5:\"admin\";s:6:\"passwd\";s:128:\"6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94\";}}\"");
?>