<?php
    function halo($user = User) {
        return "Halo $user";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
	<link rel="shortcut icon" href="logo.png">
</head>
<body>
    <h1> Built-in Function </h1>
    <h2> date + strtotime : <?= date("l, d M Y", strtotime("10 apr 2003")); ?> </h2>
    <h2> var_dump + strlen : <?php var_dump(strlen("nang omah wae")); ?> </h2>
    <br>
    <h1> User Define Function </h1>
    <h2> <?= halo("Bapa"); ?> </h2>

    <br><br>
    <a href="index.html">Kembali Ke Home</a>
</body>
</html>