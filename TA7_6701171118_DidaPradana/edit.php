<?php 
include("db.php");
    
    $nim     = $_GET['nim'];
    $edit   = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $sql    = mysqli_query($conn,$edit); 
    $row    = mysqli_fetch_assoc($sql);

 ?>
 <h2>Silahkan Edit Data anda</h2>
    <pre>
        <form method="post">
            Nama            : <input type="text" name="nama" value="<?php echo $row['nama'] ?>">
            
            NIM             : <input type="text" name="nim" value="<?php echo $row['nim'] ?>">
            
            Jenis kelamin   : <input type="text" name="jenkel" value="<?php echo $row['jenkel'] ?>">

            Prodi           : <input type="text" name="prodi" value="<?php echo $row['prodi'] ?>">

            Fakultas        : <input type="text" name="fakultas" value="<?php echo $row['fakultas'] ?>">

            Asal        	: <input type="text" name="asal" value="<?php echo $row['asal'] ?>">

            Moto        	: <input type="text" name="fakultas" value="<?php echo $row['moto'] ?>">
            
            <input type="submit" name="submit" value="Simpan">
        </form>
    </pre>
<?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jenkel = $_POST['jenkel'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

        $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jenkel='$jenkel', prodi='$prodi',fakultas='$fakultas', asal='$asal', moto='$moto' WHERE nim='$nim'";

        if (mysqli_query($conn, $sql)) {
                echo "<script> 
                        alert('Data berhasil diubah!'); 
                        location='view.php';
                     </script>";
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }