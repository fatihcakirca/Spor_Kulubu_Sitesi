<?php 
session_start(); 
include "baglanti.php";

if (isset($_POST['kullaniciadi']) && isset($_POST['sifre'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$kullaniciadi = validate($_POST['kullaniciadi']);
	$sifre = validate($_POST['sifre']);

	if (empty($kullaniciadi) && empty($sifre)) {
		header("Location: index.html?error=Kullanici_adi_ve_sifre_zorunlu");
	    exit();
	}
	else if(empty($kullaniciadi)){
        header("Location: index.html?error=Kullanici_adi_zorunlu");
	    exit();
	}
	else if(empty($sifre)){
        header("Location: index.html?error=Sifre_zorunlu");
	    exit();
	}
	else{
		$conn = mysqli_connect("localhost","root","","proje");
		$sql = "SELECT * FROM kullanici WHERE kullaniciadi='$kullaniciadi' AND sifre='$sifre';";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) !== 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['kullaniciadi'] === $kullaniciadi && $row['sifre'] === $sifre) {
				$_SESSION['id'] = $row['id'];
            	$_SESSION['kullaniciadi'] = $row['kullaniciadi'];
            	$_SESSION['sifre'] = $row['sifre'];
            	header("Location: anasayfa.php");
		        exit();
            } 
			else{
				header("Location: index.html?error=Kullanici_adi_veya_sifre_yanlis");
		        exit();
			}
		} 
		else {
			header("Location: index.html?error=Kullanici_adi_veya_sifre_yanlis");
		    exit();
		}
	}
}
else{
	header("Location: anasayfa.php");
	exit();
}
?>