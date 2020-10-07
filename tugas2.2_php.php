<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$jual=80000;
	$beli=50000;

	$untung=($beli/$jual)*100;

	?>
	<p>Jual = 80000</p>
	<p>Beli = 50000</p>
	<p>Keuntungan = ?</p>
	<p>Jawaban : <?php echo $untung; ?> %</p>

</body>
</html>