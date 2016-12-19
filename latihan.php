<?php
	$judul_web = "Praktikum Pemrograman Web";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul_web ?></title>
</head>
<body>

<header>
	<h1><?php echo $judul_web ?></h1>
	<p><?php echo Date('l, d F Y') ?></p>
</header>

<article>
	<p><?php include('percabangan.php') ?></p>
</article>


</body>
</html>