<?php
	$data = 0;
		
	if ($_POST)
	{
		$data = $_POST['jml'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>
    <link rel="shortcut icon" href="logo.png">
    <style>
        div {
            width: 100px;
            height: 100px;
            background-image: url('imam.png');
            line-height: 100px;
            margin: 5px;
            float: left;
        }
    </style>
</head>
<body>
    <h1> Perulangan </h1>
    <h2> Summon Imam Joming Berapapun Sesuka Hatimu!</h2>
    <br>

    <?php
        $i = 0;
        if (isset($_POST['jml'])){
            do {
                echo("<div></div>");
                $i++;
            } while ($i < $_POST['jml']);
        }
        if (!isset($_POST['jml'])){
            echo("<div></div>");
        }
    ?>

    <br><br><br><br><br><br><br><br>
    <form method="POST" action="">
		<input type="number" placeholder="Masukkan Jumlah" name="jml">
		<input type="submit" name="submit" value="Tambah">
	</form>
    


    <br><br>
    <a href="index.html">Kembali Ke Home</a>
</body>
</html>