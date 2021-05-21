<?php
include 'netting/baglan.php'; 
$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id = ?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<!-- SEO Meta Tags -->
	

	<!-- Website Title -->
	

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/style12.css" rel="stylesheet" type="text/css">
	
	
	<!-- Favicon  -->
	<link rel="icon" href="images/kucuk-logo-2.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<div class="fixed-btn" >
		<a style="font-size: 16px; color: black " href="tel://+905541523636">
			<i class="fa fa-phone-volume"> ARA-2</i>
		</a>   

</div>

<div class="fixed-btn-2" >
		<a style="font-size: 18px; color: black " href="tel://+905549515149">
			<i class="fa fa-phone-volume"> ARA-1</i>
		</a>   

</div>


	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
		<!-- Text Logo - Use this if you don't have a graphic logo -->

		<!-- <a style='font-size:22px' class="navbar-brand logo-text page-scroll" href="index.html">AMİR AKÜ</a>  -->
		<!-- <a style='font-size:30px' class="navbar-brand logo-text page-scroll" href="index.html">+90534242424</a> -->


		<!-- Image Logo -->
		<a class="navbar-brand logo-image" href="anasayfa"><img  src="images/logo-23.png" alt="AMİR&ŞAMİL AKÜ"></a>
		<!-- <a href="tel://+905549515149"><img src="images/tel-icon6-edited.png" ></a> -->
		<a style="font-size: 26px; color: white " href="tel://+905549515149">
			<i class="fa fa-phone-volume"></i>
		</a>  
		<a style="font-size: 15px; color: white " href="tel://+905549515149">05549515149</a>  
		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->



		
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="index.php#header">ANASAYFA <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="index.php#akuler">AKÜ FİYAT ÖĞREN</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">AKÜ HAKKINDA</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="akunun-bittigini-nasil-anlariz"><span class="item-text">Akünün Bittiği Nasıl Anlaşılır?</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="akunun-bittigini-gösteren-isaretler"><span class="item-text">Akü Ömrünün Bittiğini Gösteren 8 İşaret</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="aku-alacaklarin-bilmesi-gerekenler"><span class="item-text">Akü Alacaklar için Önemli Bilgi</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="aku-secimi-nasil-yapilir"><span class="item-text">Akü Seçimi Nasıl Yapılmalıdır?</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="aku-omru-uzar-mi"><span class="item-text">Akünün Ömrü Nasıl Uzar</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="sik-sorulan-sorular"><span class="item-text">Sıkça Sorulan Sorular</span></a>

					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="amir-samil-aku-hakkimizda">HAKKIMIZDA</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">BİZE ULAŞIN</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="index.php#bize-ulasin"><span class="item-text">Servis ve Montaj Adreslerimiz</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="index.php#contact"><span class="item-text">Şikayet ve Memnuniyetlerinizi Bildirin</span></a>
					</div>
				</li>

				<!-- Dropdown Menu -->          

				<!-- end of dropdown menu -->


			</ul>
			

		<!--
			<?php  
			$menusor=$db->prepare("SELECT * FROM menu WHERE menu_ust=:menu_ust ORDER BY menu_sira ASC");
			$menusor->execute(array(
				'menu_ust'=>0));

			while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){	
				$menu_id=$menucek['menu_id'];
				$altmenusor=$db->prepare("SELECT * FROM menu WHERE menu_ust=? AND menu_aktif =? ORDER BY menu_sira ASC");
				$altmenusor->execute(array($menu_id,1));

				$say=$altmenusor->rowCount();
				?>			

				<?php  
				if($say>0){?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle page-scroll" href="<?php echo $menucek['menu_url'] ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $menucek['menu_ad'] ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php  while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)){ ?>
								<a class="dropdown-item" href="<?php echo $altmenucek['menu_url'] ?>"><span class="item-text"><?php echo $altmenucek['menu_ad'] ?></span></a>
								<div class="dropdown-items-divide-hr"></div>

							<?php } ?>
						</div>
					</li>  
				<?php } ?>
				<?php if($say==0){ ?>	
					<li class="nav-item">
						<a class="nav-link page-scroll" href="<?php echo $menucek['menu_url'] ?>"><?php echo $menucek['menu_ad'] ?></a>
					</li>
				<?php } ?>

			<?php } ?>
		-->
		
		<!-- Dropdown Menu -->      

				<!--   
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
					</div>
				</li>   
				end of dropdown menu -->




				<span class="nav-item social-icons">
					<span class="fa-stack">
						<a href="#your-link">
							<span class="hexagon"></span>
							<i class="fab fa-facebook-f fa-stack-1x"></i>
						</a>
					</span>
					<span class="fa-stack">
						<a href="#your-link">
							<span class="hexagon"></span>
							<i class="fab fa-twitter fa-stack-1x"></i>
						</a>
					</span>
				</span>
			</div>
		</nav> <!-- end of navbar -->
		<!-- end of navbar -->

		<!-- WhatsApp ekleme -->
		<script type="text/javascript">
			(function () {
				var options = {
            whatsapp: "905551806857", // WhatsApp numarası
            call_to_action: "Bize yazın..", // Görüntülenecek yazı
            position: "left", // Sağ taraf için 'right' sol taraf için 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- WhatsApp ekleme -->


