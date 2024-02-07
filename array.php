<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
	<link rel="shortcut icon" href="logo.png">
</head>
<body>
	<h1> Array </h1>
	<h2> Nama Nama Hari </h2>
    <form method="POST" action="">
		<input type="text" placeholder="Masukkan Nama Hari" name="nama">
		<input type="submit" name="submit" value="Tambah">
	</form>

    <?php
		$data = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
		
		if ($_POST)
		{
			$data[] = $_POST['nama'];
		}

		echo '<br>';
	
        foreach ($data as $d) {
            echo($d);
			echo '<br>';
        }
	?>

    <br><br>
    <a href="/PWPB/">Kembali Ke Home</a>
</body>
</html>