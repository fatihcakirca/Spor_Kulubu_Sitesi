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
include("baglanti2.php");
$tcnoErr = $adiErr = $soyadiErr = $dogumyiliErr = "";
$tcno = $adi = $soyadi = $dogumyili = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["tcno"])) {
    $tcnoErr = "Tc No zorunlu";
  } else {
    $tcno = test_input($_POST["tcno"]);
  }
  
  if (empty($_POST["adi"])) {
    $adiErr = "Adı zorunlu";
  } else {
    $adi = test_input($_POST["adi"]);
  }
    
  if (empty($_POST["soyadi"])) {
    $soyadiErr = "Soyadı zorunlu";
  } else {
    $soyadi = test_input($_POST["soyadi"]);
  }

  if (empty($_POST["dogumyili"])) {
    $dogumyiliErr = "Doğum Yılı zorunlu";
  } else {
    $dogumyili = test_input($_POST["dogumyili"]);
  }
}
?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
echo $tcno=$_POST['tcno'];
echo $adi=$_POST['adi'];
echo $soyadi=$_POST['soyadi'];
echo $dogumyili=$_POST['dogumyili'];

if (!isset($tcno) || !isset($adi) || !isset($soyadi) || !isset($dogumyili) )
  {
  	echo "Tüm alanlara giriş yapmadınız, tüm alanları doldurup tekrar deneyiniz";
  	exit;
  }
$sorgu="insert into user (id,tcno,adi,soyadi,dogumyili) values (null,'".$tcno."','".$adi."','".$soyadi."','".$dogumyili."')";
echo $sorgu;

$sonuc= mysqli_query($db,$sorgu);

if ($sonuc)
 	{
  echo mysqli_affected_rows($db);
  echo(" adet kaydınız başarı ile eklenmiştir.......<br>");
  echo("Takımın premium üyesi oldunuz.<br>");
   }
   else{
   echo "hata var";
   echo mysqli_errno($db) . ": " . mysqli_error($db) . "\n";

   }
   
echo ('<a href = "anasayfa.php">Ana sayfaya dönmek için tıklayınız.<a>');

} else {
?>

<div class="w3-top">
<div class="w3-bar w3-red w3-card w3-left-align w3-large">
<h1>BEREKET SİGORTA ÜMRANİYESPOR</h1>
<h3>PREMIUM ÜYESİ OL</h3>
<p><span class="error">* Zorunlu Alanlar</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  TC Kimlik Numaranız: <input type="text" name="tcno">
  <span class="error">* <?php //echo $tcnoErr;?></span>
  <br><br>
  Adınız: <input type="text" name="adi">
  <span class="error">* <?php //echo $adiErr;?></span>
  <br><br>
  Soyadınız: <input type="text" name="soyadi">
  <span class="error">* <?php //echo $soyadiErr;?></span>
  <br><br>
  Doğum Yılınız: <input type="text" name="dogumyili">
  <span class="error">* <?php //echo $dogumyiliErr;?></span>
  <br><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Gönder</button>  
</form>
</div>
</div>
<?php } ?>

</body>
</html>