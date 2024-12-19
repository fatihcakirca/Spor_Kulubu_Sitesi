<?php
session_start(); 
if ( !isset($_SESSION['kullaniciadi']) && !isset($_SESSION['sifre']) ) {
	header("Location: index.html?error=Kullanıcı adı veya şifre yanlış");
}
?>

<html>
<head>
<title>Bereket Sigorta Ümraniyespor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Bereket Sigorta<br>Ümraniyespor</b><br>
	Hoşgeldin <?php echo $_SESSION["kullaniciadi"]; ?></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#tarihcesi" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tarihçesi</a> 
    <a href="#basarilari" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Başarıları</a> 
    <a href="#oyuncular" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Oyuncular</a>	
    <a href="#formalari" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Formaları</a>
	<a href="#stadyumu" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Stadyumu</a>
	<a href="#fantoken" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fan Token</a>
	<a href="#indirimkuponu" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">İndirim Kuponu</a>
	<a href="#premiumuyesiol" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Premium Üyeliği</a>
	<a href="#cikisyap" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Çıkış Yap</a>
  </div>
</nav>

<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Bereket Sigorta Ümraniyespor</span>
</header>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main;w3-container" style="margin-left:340px;margin-right:80px;margin-top:75px">
<h1 class="w3-jumbo w3-text-red"><b>BEREKET SİGORTA ÜMRANİYESPOR</b></h1>
	<br><br><br><br><br>
	<img src="Ümraniyespor.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="500">
	<br><br><br><br><br>   
Kulüp Kodu &ensp;000232 <br>
: <br>
Adres :&emsp;&emsp;&emsp;KÜÇÜKSU CAD. HEKİMBAŞI MAH. ÜMRANİYE SOS. SPOR T. ÜMRANİYE <br>
Şehir :&emsp;&emsp;&emsp;&ensp;İSTANBUL <br>
Bölge :&emsp;&emsp;&emsp;&nbsp;İST./MARMARA <br>
Telefon :&emsp;&emsp;&nbsp;(0216)6302008 <br>
Faks :&emsp;&emsp;&emsp;&ensp;&nbsp;(0216)6302009 <br>
Başkan :&emsp;&emsp;&nbsp;TARIK AKSAR
    
  <div class="w3-container" id="tarihcesi" style="margin-top:75px" >
	<h1 class="w3-xxxlarge w3-text-red"><b>Tarihçesi</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
	<p>Ümraniyespor, 1938 yılında kurulmuş; 1990'lı yıllarda 7 sezon Üçüncü Lig'de mücadele ettikten sonra 2000 yılında amatör kümeye düşmüştür. 2009-2010 sezonunda Süper Amatör Lig'de, 2010-2011 sezonunda ise Bölgesel Amatör Lig'de grubunda lider tamamlamış ve Spor Toto 3. Lig'e yükselmiştir.

2012-2013 sezonunda katıldığı Türkiye Kupasında Anadolu Üsküdar takımını 2-0 yenip Kayseri Erciyesspor'un rakibi olmuştur. Kayseri Erciyesspor ile oynanan maçta normal süresi 1-1 tamamlanan karşılaşmanın uzatma dakikalarında kalesinde gördüğü golle Kayseri Erciyesspor’a 2-1 yenilmiştir. 2012-13 3. Lig sezonunu 5.Sırada bitiren Ümraniyespor Play-off Finalinde Çanakkale Dardanel'e 5-0 mağlup olmuştur.

Ümraniyespor 2013-14 3. Lig sezonunun otuzuncu haftasında oynadığı Yeşil Bursa maçını kendi evinde 2-1 kazanarak ligin bitimine 4 hafta kala Ergun Ortakçı yönetiminde şampiyonluğunu ilan etmiş ve bir sonraki yıl tarihinde ilk kez 2. Lig'de oynamaya hak kazanmıştır.

2. Lig'de ilk sezonunda Play Off mücadelesine katılmaya hak kazanan Ümraniyespor, 1461 Trabzon'a elenmiştir.

Sonraki sezonda ise ligin 32. haftasında deplasmanda İstanbulspor'u 3-0 mağlup ederek ligin bitimine 2 hafta kala şampiyonluğu garantilemiş ve tarihinde ilk kez 1. Lig'e yükselmiştir.
    </p>
  </div>

  <div class="w3-container" id="basarilari" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Başarıları</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>1. Lig<br>
Şampiyonluk (1) : 2021-2022<br>

Türkiye Kupası<br>
Yarı final (1) : 2018-2019<br>

1. Lig<br>
Play Off Yarı final (1) : 2017-2018<br>

2. Lig<br>
Şampiyonluk (1) : 2015-2016<br>

3. Lig<br>
Şampiyonluk (1) : 2013-2014<br>

Bölgesel Amatör Lig<br>
Şampiyonluk (1) : 2010-2011<br>
    </p>
  </div>
  
  <div class="w3-container" id="oyuncular" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Oyuncular</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p><b>Kadro</b><br>
AJDIN HASIC <br>  
ALİM ÖZTÜRK <br> 
ANIL DEMİR <br> 
ANTONIO MRSIC <br>
ATALAY BABACAN (Kiralık geldiği takım: GALATASARAY A.Ş.) <br>
AVDIJA VRSAJEVIC <br> 
BURAK ÖĞÜR <br> 
EMİRHAN ÇALIŞKAN <br> 
EMRE KAYA <br>
EMRE NEFİZ <br> 
ERCAN COŞKUN <br>
FARUK CAN GENÇ (Kiralık geldiği takım: TRABZONSPOR A.Ş.) <br>
FATİH YİĞİT ŞANLİTÜRK <br>  
HASSANE JUNIOR FOFANA (U19 Futbolcusu) <br> 
HÜSEYİN ATAKAN ÜNER (Kiralık geldiği takım: BEŞİKTAŞ A.Ş.) <br> 
IDRISSA CAMARA <br> 
KARTAL KAYRA YILMAZ (Kiralık geldiği takım: BEŞİKTAŞ A.Ş.) <br> 
MEVLÜT ERDİNÇ <br> 
MUSTAFA ESER <br> 
MUSTAFA CAN KARAGÖZ <br> 
OĞUZ GÜRBULAK <br> 
ONUR AYIK <br> 
ORKUN ÖZDEMİR <br> 
SERKAN GÖKSU <br> 
STEFANO NAPOLEONI <br> 
TOMISLAV GLUMAC <br> 
YACINE BAMMOU <br> 
YONATHAN ALEXANDER DEL VALLE RODRIGUEZ <br> 
YUSUF EMRE GÜLTEKİN 
</p>
  </div>
  
  <div class="w3-container" id="formalari" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Formaları</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="000232_I_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
      <img src="000232_I_2_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
      <img src="000232_D_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_Y_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_K_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_K_2_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_K_3_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_K_4_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
    </div>

    <div class="w3-half">
      <img src="000232_IA_1_1500" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
      <img src="000232_IA_2_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
      <img src="000232_DA_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_YA_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_KA_1_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_KA_2_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_KA_3_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
	  <img src="000232_KA_4_1500.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Ümraniyespor_Logosu" width="500" height="1500">
    </div>
  </div>
  
  <div class="w3-container" id="stadyumu" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Stadyumu</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
	<p><h1 class="w3-large w3-text-red"><b>ÜMRANİYE BELEDİYESİ ŞEHİR STADI</b></h1><br>
Genel Bilgiler&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tribünler
<hr>								
Seyirci Kapasitesi&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:3513&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Koltuklandırma&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:TÜMÜ 	<br>
Şehir&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:İSTANBUL&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;KOLTUKLU <br>
Açıklama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Engelli Tribünü&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:Var <br>
Oyun Alanı&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kapalı Devre Kamera&emsp;&emsp;&emsp;&nbsp;:Var<br> 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Sistemi	 <br>					
<hr>
Oyun Alanı Ölçüsü&emsp;&emsp;&emsp;&emsp;&emsp;:68X105 <br>
Zemin Türü&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:Çim <br>
Işıklandırma&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:Yok <br>
<br><br><br><br><br>
<img src="ana-kamera.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
<img src="vip-protokol-dinlen.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="1000" height="500">
<img src="misafir-soyunma.jpg" alt="Falls" class="w3-image w3-margin-top" width="1000" height="500">
<img src="skorboard.jpg" alt="Skies" class="w3-image w3-margin-top" width="1000" height="500">
<img src="protokol-genel.jpg" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">
<img src="maraton genel.jpg" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">
<img src="yedek.jpg" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">
</p>
</div>

	<div class="w3-container" id="fantoken" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Fan Token</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
	<form method="post" action="fantoken.php">
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="text-align:center;">Bereket Sigorta Ümraniyespor</h1>
  <h3 class="text-align:center;">Fan Token Almak İçin Tıklayınız</h3>
  <button class="w3-button w3-black w3-text-red w3-padding-large w3-large w3-margin-top">Fan Token Al</button>
</header>
</form>
				  
  <div class="w3-container" id="indirimkuponu" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>İndirim Kuponu</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
	<form method="post" action="indirimkuponu.php">
<header class="w3-container w3-deep-orange w3-center" style="padding:128px 16px">
  <h1 class="text-align:center;">Bereket Sigorta Ümraniyespor</h1>
  <h3 class="text-align:center;">İndirim Kuponu Kazanmak İçin Tıklayınız</h3>
  <button class="w3-button w3-black w3-text-red w3-padding-large w3-large w3-margin-top">İndirim Kuponu Kazan</button>
</header>
</form>
  
  <div class="w3-container" id="premiumuyesiol" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Premium Üyeliği</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
	<form method="post" action="premiumkayit.php">
<header class="w3-container w3-orange red w3-center" style="padding:128px 16px">
  <h1 class="text-align:center;">Bereket Sigorta Ümraniyespor</h1>
  <h3 class="text-align:center;">Premium Üyesi Olmak İçin Tıklayınız</h3>
  <button class="w3-button w3-black w3-text-red w3-padding-large w3-large w3-margin-top">Premium Kayıt Ol</button>
</header>
</form>

 <div class="w3-container" id="cikisyap" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><a href="cikis.php"><b>Çıkış Yap</b></a></h1>	
	<hr style="width:50px;border:5px solid red" class="w3-round">
	<form method="post" action="cikis.php">
  <button class="w3-button w3-black w3-text-red w3-padding-large w3-large w3-margin-top">Çıkış Yap</button>
</header>
</form>

  </div>
</div>

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"></p></div>

</body>
</html>