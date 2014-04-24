<html>
<body>

<meta charset="utf-8">
<CENTER>
<form action="eklemeIslemi.php" method="GET" name="testform">
<input type="hidden" name="count" value="3"></input>
Öğrenci Ad:
	<input type="text" name="ad"></input><br><br>
Öğrenci Soyadı:
	<input type="text" name="soyad"></input><br><br>
Öğrenci Numarası:
	<input type="text" name="numara"></input><br><br>
Öğrenci Sınıfı:
	<input type="radio" name="sinif" value="sinif1">1. Sinif</input>
	<input type="radio" name="sinif" value="sinif2">2. Sinif</input>
	<input type="radio" name="sinif" value="sinif3">3. Sinif</input>
	<input type="radio" name="sinif" value="sinif4">4. Sinif</input><br><br>
Aldığı Not:
	<input type="text" name="not"></input><br><br>

	<!--
Öğrenci Fotoğrafı:
	<input type="file" name="selectFoto"></input><br>
-->	
	<input type="submit" value="Tamam"></input>
	<input type="reset" value="Temizle"></input>

	</CENTER>

</body>
</html>