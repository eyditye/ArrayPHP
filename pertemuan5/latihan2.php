<?php 
$angka = [1,4,5,16,13,90,989,1000];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		div {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
	</style>
</head>
<body>
	<?php for( $i=0 ; $i<count($angka); $i++) { ?>
		<div><?= "$angka[$i]" ; ?></div>
	<?php }  ?>
</html>
