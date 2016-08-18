<html>
<head>
	<title>$title</title>
</head>
<body>
<h1><?php echo $message ?></h1>
<ul>
<h2><?php echo $name; ?></h2>
<?php foreach($names as $m) : ?>
  <li>
  <?php echo "name: $m" ; ?>
  </li>
<?php endforeach ; ?>
</ul>
</body>
</html>