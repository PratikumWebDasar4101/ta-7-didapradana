<form action="view.php" method="POST">
	Search : <input type="text" name="search"> <br>
	<input type="submit" name="kirim">
</form>
<br>
<br>
<a href="input.php">Tambah data</a> <br><br>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
	</tr>
	<?php 
		@$search = $_POST['search'];
		include ('db.php');
		$sql1 = "SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'";
		$result = mysqli_query($conn, $sql1);
			
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['nim']?></td>
				<td><a href="delete.php?nim=<?php echo $row['nim']; ?>"> Hapus</a> | <a href="edit.php?nim=<?php echo $row['nim']?>">Edit</a></td>
			</tr>
			<?php
			}
		} else{
			echo "0 results";
		}
 	?>
 </table>