<html>
<body>
<meta charset="utf-8">

<?php 
$baglanti = mysqli_connect("localhost","root","3103709","OgrenciBilgiSistemi");
// Baglantiyi Kontrol Et
if (mysqli_connect_errno($baglanti))
{
echo "MySQLe baglanamadi: " . mysqli_connect_error();
}
else{
	echo "MySQLe baglandi.";
}

if(isset($_GET["ad"]) && isset($_GET["soyad"]) && isset($_GET["numara"]) && isset($_GET["sinif"]) && isset($_GET["not"])){	
	$ad = $_GET["ad"];
	$ad = trim($ad);
    $ad = stripslashes($ad); 
	

	$soyad = $_GET["soyad"];
	$soyad = trim($soyad);
    $soyad = stripslashes($soyad);
	

	$numara = $_GET["numara"];
	$numara = trim($numara);
    $numara = stripslashes($numara);
	

	$sinif = $_GET["sinif"];
	$sinif = trim($sinif);
    $sinif = stripslashes($sinif);
	

	$not = $_GET["not"];
	$not = trim($not);
    $not = stripslashes($not);
	if (empty($ad) || empty($soyad) || empty($numara) || empty($sinif) || empty($not)) {
		echo "Lütfen eksik bilgi girmeyiniz.";
	}
	else{
	echo "$ad <br>";echo "$soyad <br>";echo "$numara <br>";echo "$sinif <br>";echo "$not <br>";
	mysqli_query($baglanti,"INSERT INTO ogrenciler(numara, ad, soyad, sinif, `not`) VALUES ($numara, '$ad', '$soyad', '$sinif', $not);")or die("Hata: kayıt işlemi gerçekleşemedi.");

	}
}

else{
	echo "Lutfen eksik bilgi girmeyiniz.";
}




?>
 
</body>
</html>