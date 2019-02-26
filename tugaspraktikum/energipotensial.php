<h3>Hitung Energi Potensial</h3>

<form action="energipotensial.php" method="post">
	Massa Benda : <input type="text" name="m"><br>
	Tinggi benda dari permukaan tanah : <input type="text" name="h"><br>
	<input type="submit" name="submit" value="Hitung">
</form>

<?php
	if(isset($_POST['submit'])){
		$m = $_POST['m'];
		$h = $_POST['h'];

		$ep = $m * 10 * $h ;
		echo "Energi Potensial : $ep J";
	}
?>
