<html>
  <head>
    <title>BEREKET SİGORTA ÜMRANİYESPOR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-laptop {font-size:200px}
    </style>
  </head>
<body>

<?php

if ( !empty($_POST) ) {

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

error_reporting(E_ALL ^ E_NOTICE);
include("baglanti.php");
$isimErr = $emailErr = $kullaniciadiErr = $sifreErr = "";
$isim = $email = $kullaniciadi = $sifre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["isim"])) {
    $isimErr = "İsim zorunlu";
  } else {
    $isim = test_input($_POST["isim"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "E-posta zorunlu";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["kullaniciadi"])) {
    $kullaniciadiErr = "Kullanıcı adı zorunlu";
  } else {
    $kullaniciadi = test_input($_POST["kullaniciadi"]);
  }

  if (empty($_POST["sifre"])) {
    $sifreErr = "Şifre zorunlu";
  } else {
    $sifre = test_input($_POST["sifre"]);
  }
}
?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
echo $isim=$_POST['isim'];
echo $email=$_POST['email'];
echo $kullaniciadi=$_POST['kullaniciadi'];
echo $sifre=$_POST['sifre'];

if (!isset($isim) || !isset($email) || !isset($kullaniciadi) || !isset($sifre) )
  {
  	echo "Tüm alanlara giriş yapmadınız, tüm alanları doldurup tekrar deneyiniz";
  	exit;
  }
$sorgu="insert into kullanici (id,isim,email,kullaniciadi,sifre) values (null,'".$isim."','".$email."','".$kullaniciadi."','".$sifre."')";
echo $sorgu;

$sonuc= mysqli_query($db,$sorgu);

if ($sonuc)
 	{
  echo mysqli_affected_rows($db);
  echo(" adet kaydınız başarı ile eklenmiştir.......<br>");
   }
   else{
   echo "hata var";
   echo mysqli_errno($db) . ": " . mysqli_error($db) . "\n";

   }
   
echo ('<a href = "index.html">Ana sayfaya dönmek için tıklayınız.<a>');

} else {
?>

<div class="w3-top">
<div class="w3-bar w3-red w3-card w3-left-align w3-large">
<h1>BEREKET SİGORTA ÜMRANİYESPOR</h1>
<h3>KAYIT OL</h3>
<p><span class="error">* Zorunlu Alanlar</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  İsim: <input type="text" name="isim">
  <span class="error">* <?php //echo $isimErr;?></span>
  <br><br>
  E-posta: <input type="text" name="email">
  <span class="error">* <?php //echo $emailErr;?></span>
  <br><br>
  Kullanıcı Adı: <input type="text" name="kullaniciadi">
  <span class="error">* <?php //echo $kullaniciadiErr;?></span>
  <br><br>
  Şifre: <input type="password" name="sifre">
  <span class="error">* <?php //echo $sifreErr;?></span>
  <br><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Gönder</button>  
</form>
</div>
</div>
<?php } ?>

</body>
</html>