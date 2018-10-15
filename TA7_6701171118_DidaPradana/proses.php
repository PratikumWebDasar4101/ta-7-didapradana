<?php 
include ('db.php');

	if (isset($_POST['kirim'])) {
	
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jenkel = $_POST['jenkel'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		$sql = "INSERT INTO mahasiswa (nama, nim, jenkel, prodi, fakultas, asal, moto) 
	            VALUES ('$nama', '$nim', '$jenkel', '$prodi', '$fakultas', '$asal', '$moto')";

	    if (mysqli_query($conn, $sql)) {
			    echo "<script>
         				alert('Data berhasil di tambah');
         				location='view.php';
         			</script>";		
	    }else{
	    	echo "Gagal tambah data";
	    }

	}

 ?>