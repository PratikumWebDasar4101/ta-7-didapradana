<form method="post" action="proses.php" enctype="">
	Nama<br>
	<input type="text" name="nama"> <br>
	NIM<br>
	<input type="text" pattern="\d*" name="nim"><br>
	Jenis Kelamin
	<input type="radio" name="jenkel" value="laki-laki">Laki-Laki <input type="radio" name="jenkel" value="perempuan"> Perempuan <br>
	Prodi <br>
	<select name="prodi">
		<option>MI</option>
		<option>TK</option>
		<option>TT</option>
		<option>IF</option>
	</select>
	<br>
	Fakultas
	<br>
	<select name="fakultas">
		<option>FIT</option>
		<option>FRI</option>
		<option>FKB</option>
		<option>FIK</option>
	</select>
	<br>
	Asal <br>
	<input type="text" name="asal"> <br>
	Motto Hidup
	<br>
	<textarea name="moto" cols="50" rows="10">
		
	</textarea>
	<br>
	<input type="submit" name="kirim">

</form>