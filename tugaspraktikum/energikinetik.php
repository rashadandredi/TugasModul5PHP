<h3>Hitung Energi Kinetik</h3>

<form action="energikinetik.php" method="post">
	Massa Benda : <input type="text" name="m"><br>
	Kecepatan Benda : <input type="text" name="v"><br>
	<input type="submit" name="submit" value="Hitung">
</form>

<?php
	if(isset($_POST['submit'])){
		$m = $_POST['m'];
		$v = $_POST['v'];

		$ek = 0.5 * $m * $v * $v;
		echo "Energi Kinetik: $ek J";
	}
?>
