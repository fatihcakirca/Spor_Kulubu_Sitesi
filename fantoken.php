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
include("baglanti4.php");
$cinsiyetErr = $odulErr = $oyErr = $urunErr = "";
$cinsiyet = $odul = $oy = $urun = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cinsiyet"])) {
    $cinsiyetErr = "Cinsiyet zorunlu";
  } else {
    $cinsiyet = test_input($_POST["cinsiyet"]);
  }
  
  if (empty($_POST["odul"])) {
    $odulErr = "Ödül zorunlu";
  } else {
    $odul = test_input($_POST["odul"]);
  }
    
  if (empty($_POST["oy"])) {
    $oyErr = "Oy zorunlu";
  } else {
    $oy = test_input($_POST["oy"]);
  }

  if (empty($_POST["urun"])) {
    $urunErr = "Ürün zorunlu";
  } else {
    $urun = test_input($_POST["urun"]);
  }
}
?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
echo $cinsiyet=$_POST['cinsiyet'];
echo $odul=$_POST['odul'];
echo $oy=$_POST['oy'];
echo $urun=$_POST['urun'];

if (!isset($cinsiyet) || !isset($odul) || !isset($oy) || !isset($urun) )
  {
  	echo "Tüm alanlara giriş yapmadınız, tüm alanları doldurup tekrar deneyiniz";
  	exit;
  }
$sorgu="insert into digerkullanici (id,cinsiyet,odul,oy,urun) values (null,'".$cinsiyet."','".$odul."','".$oy."','".$urun."')";
echo $sorgu;

$sonuc= mysqli_query($db,$sorgu);

if ($sonuc)
 	{
  echo mysqli_affected_rows($db);
  echo(" adet kaydınız başarı ile eklenmiştir.......<br>");
  echo("Takım fan tokeni aldınız.<br>");
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
  Cinsiyetiniz: <input type="text" name="cinsiyet">
  <span class="error">* <?php //echo $cinsiyetErr;?></span>
  <br><br>
  Ödülünüz: <input type="text" name="odul">
  <span class="error">* <?php //echo $odulErr;?></span>
  <br><br>
  Oyunuz: <input type="text" name="oy">
  <span class="error">* <?php //echo $oyErr;?></span>
  <br><br>
  Ürününüz: <input type="text" name="urun">
  <span class="error">* <?php //echo $urunErr;?></span>
  <br><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Gönder</button>  
</form>
</div>
</div>
<?php } ?>

</body>
</html>