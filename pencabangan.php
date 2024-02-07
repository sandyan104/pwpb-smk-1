<!DOCTYPE html>
<html>
<head>
	<title>Pencabangan</title>
	<link rel="shortcut icon" href="logo.png">
</head>
<body>
    <h1> Pencabangan </h1>
    <h2> Perlukah saya diperiksa ke Rumah Sakit terkait COVID-19?</h2>
    <p> Sumber : Humas Provinsi Jawa Barat </p>
    <br>
    <h2> Apakah anda pernah berinteraksi dengan pasien positif atau pernah berkunjung ke luar negeri akhir akhir ini?</h2>
    <a href="/PWPB/pencabangan.php?a=ya"><button> Ya </button></a> <a href="/PWPB/pencabangan.php?a=tidak"><button> Tidak </button></a> <br>
    
    <?php if($_GET['a']=="ya") : ?> 
        
        <h2> Sedang atau pernah demam, pilek, batuk, dan sesak nafas? </h2> <br>
        <a href="/PWPB/pencabangan.php?a=ya&aa=ya"><button> Ya </button></a> <a href="/PWPB/pencabangan.php?a=ya&aa=tidak"><button> Tidak </button></a>
        
        <?php if($_GET['aa']=="ya") : ?>
            <h2> SEGERA PERIKSAKAN DIRI KE RUMAH SAKIT RUJUKAN COVID-19 TERDEKAT </h2> <br>
        <?php endif; ?>
        
        <?php if($_GET['aa']=="tidak") : ?>
            <h2> Karantina diri 14 hari. apakah setelah karantina ada demam, pilek, dan sesak nafas? </h2> <br>
            <a href="/PWPB/pencabangan.php?a=ya&aa=tidak&ab=ya"><button> Ya </button></a> <a href="/PWPB/pencabangan.php?a=ya&aa=tidak&ab=tidak"><button> Tidak </button></a>
            
            <?php if($_GET['ab']=="ya") : ?>
                <h2> SEGERA PERIKSAKAN DIRI KE RUMAH SAKIT RUJUKAN COVID-19 TERDEKAT </h2>
            <?php endif; ?>
            
            <?php if($_GET['ab']=="tidak") : ?>
                <h2> Jaga Kesehatan </h2>
            <?php endif; ?>
        
        <?php endif; ?>
    
    <?php endif; ?>

    <?php if($_GET['a']=="tidak") : ?>
        
        <h2> Sedang atau pernah demam, pilek, batuk, dan sesak nafas? </h2> <br>
        <a href="/PWPB/pencabangan.php?a=tidak&ba=ya"><button> Ya </button></a> <a href="/PWPB/pencabangan.php?a=tidak&ba=tidak"><button> Tidak </button></a>
        
        <?php if($_GET['ba']=="ya") : ?>
            <h2> Periksa ke yankes terdekat dan istirahat yang cukup </h2> <br>
        <?php endif; ?>

        <?php if($_GET['ba']=="tidak") : ?>
            <h2> Okey tetap tenang dan jaga kesehatan </h2> <br>
        <?php endif; ?>
    
    <?php endif; ?>


    <br><br>
    <a href="index.html">Kembali Ke Home</a>
</body>
</html>