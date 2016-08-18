<html>
<head>
	<title>$title</title>
</head>
<body>
<h1><?php echo $message ?></h1>
<ul>
<?php foreach($result as $userdata){ ?>
<li><?php print_r($userdata); ?></li>
<?php } ?>
</ul>

</body>
</html>