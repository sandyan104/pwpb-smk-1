<!DOCTYPE html>
<html>
    <head>
        <title>Aritmatika dan Logika</title>
        <link rel="shortcut icon" href="logo.png">
    </head>
    <body>
        <?php 
            if(isset($_POST['hitung'])){
                $bil1 = $_POST['bil1'];
                $bil2 = $_POST['bil2'];
                $op = $_POST['op'];
                switch ($op) {
                    case 'ta':
                        $hasil = $bil1+$bil2;
                    break;
                    case 'ku':
                        $hasil = $bil1-$bil2;
                    break;
                    case 'ka':
                        $hasil = $bil1*$bil2;
                    break;
                    case 'ba':
                        $hasil = $bil1/$bil2;
                    break;			
                }
            }
        ?>
        <h1>Aritmatika dan Logika</h1>
        <h2>KALKULATOR</h2>
        <p>*Setiap hari sabtu, minggu, senin, dan selasa, akan tampil sebuah pesan. selain hari itu, tidak akan ada pesan ditampilkan</p>
        
        <?php if (date("l")=="Sunday" || date("l")=="Saturday") : ?>
            <br>
            <p>Hari minggu bawa ketan <br> Hai kamu, jaga kesehatan</p>
        <?php endif; ?>

        <?php if (date("l")!="Sunday" && date("l")!="Saturday" && date("l")!="Monday" && date("l")!="Tuesday") : ?>
            <br>
            <p>gaada pesan, tungguin hari sabtu - minggu</p>
        <?php endif; ?>

        <?php if (date("l")=="Monday" || date("l")=="Tuesday") : ?>
            <br>
            <p>Awal minggu dagang susu <br> dirumah dulu, sehat selalu</p>
        <?php endif; ?>

		<br>
		<form method="POST" action="">	
            <?php if (isset($_POST['bil2'])) { ?>
			    <input type="text" value="<?= $_POST['bil1']; ?>" name="bil1" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <?php } else { ?>
                <input type="text" name="bil1" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <?php } ?>

			<select name="op">
				<option value="ta">+</option>
				<option value="ku">-</option>
				<option value="ka">x</option>
				<option value="ba">/</option>
            </select>

            <?php if (isset($_POST['bil2'])) { ?>
                <input type="text" value="<?= $_POST['bil2']; ?>" name="bil2" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <?php } else { ?>
                <input type="text" name="bil2" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <?php } ?>
            =
            <?php if(isset($_POST['hitung'])) { ?>
                <input type="text" value="<?= $hasil; ?>">
            <?php } else { ?>
                <input type="text" value="0">
            <?php } ?>

			<input type="submit" name="hitung" value="Hitung">											
        </form>
        <br><br>
        <a href="index.html">Kembali Ke Home</a>
    </body>
</html>