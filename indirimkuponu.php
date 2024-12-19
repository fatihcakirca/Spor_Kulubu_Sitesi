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
include("baglanti3.php");
$telnoErr = "";
$telno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["telno"])) {
    $telnoErr = "Telefon Numarası zorunlu";
  } else {
    $telno = test_input($_POST["telno"]);
  }
}
?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
echo $tcno=$_POST['telno'];

if (!isset($telno) )
  {
  	echo "Tüm alanlara giriş yapmadınız, tüm alanları doldurup tekrar deneyiniz";
  	exit;
  }
$sorgu="insert into otheruser (id,telno) values (null,'".$telno."')";
echo $sorgu;

$sonuc= mysqli_query($db,$sorgu);

if ($sonuc)
 	{
  echo mysqli_affected_rows($db);
  echo(" adet kaydınız başarı ile eklenmiştir.......<br>");
  echo("İndirim Kuponu İçin SMS Kodunu Kullanabilirsiniz.<br>");
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
<h3> TÜM ÜRÜNLERDE GEÇERLİ İNDİRİM KUPONU KAZAN</h3>
<p><span class="error">* Zorunlu Alanlar</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Telefon Numaranız: <input type="text" name="telno">
  <span class="error">* <?php //echo $telnoErr;?></span>
  <br><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Gönder</button>  
</form>
</div>
</div>
<?php } ?>

</body>
</html>