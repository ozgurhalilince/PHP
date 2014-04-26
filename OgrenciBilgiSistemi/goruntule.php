<html>
<body>
<meta charset="utf8">

<?php 

$baglanti = mysqli_connect("localhost","root","3103709","OgrenciBilgiSistemi");

//Baglantiyi Kontrol Et
if (mysqli_connect_errno($baglanti)){
echo "MySQLe baglanamadi: " . mysqli_connect_error();
}
//else{
//	echo "MySQLe baglandi.";
//}

$sonuclar = mysqli_query($baglanti,"SELECT * FROM ogrenciler");

//while($row = mysqli_fetch_array($sonuclar)) {
//  echo $row['ad'] . " " . $row['soyad'];
//  echo "<br>";
//  }
?>
<center>
<table> <td> 
	<?php  
while ($row = mysqli_fetch_array($sonuclar)) {
	echo "<tr>";
	echo "Adı: " . $row['ad'] . "<br>";
	echo "Soyadı: " . $row['soyad'] . "<br>";
	echo "Numarası: " . $row['numara'] . "<br>";
	echo "Sinifi: " . $row['sinif'] . "<br>";
	echo "Notu: " . $row['not'] . "<br>";
	echo "</tr>";
	echo "<br><br>	";
}
?>
</td>
</table>
</center>
<?php  
mysqli_close($baglanti);
?>
 
</body>
</html>