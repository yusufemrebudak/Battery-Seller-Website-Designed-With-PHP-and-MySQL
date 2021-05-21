<?php  

include 'baglan.php'; 
?>

<?php  
if(isset($_POST['mesaj_geldi'])){

	$sorgu=$db->prepare("INSERT INTO mesaj (mesaj_isim_soyisim, mesaj_mail_or_telefon , mesaj_icerik)
		VALUES (:isim_soyisim,:mail_or_telefon, :icerik)");

	$sonuc=$sorgu->execute(array(
		":isim_soyisim"=>$_POST['mesaj_isim_soyisim'],
		":mail_or_telefon"=>$_POST['mesaj_mail_or_telefon'],
		":icerik"=>$_POST['mesaj_icerik']
	));

	if($sonuc){	

		Header("Location:../index.php?durum=ok");

	}else{


		Header("Location:../index.php?durum=no");

	}
	
}

?>