<?php include 'header_2.php' ;?>

<head> 

    <meta name="description" content="80 Amper akü fiyatlarını en uygun fiyatlarla sunuyoruz.Bursa'da en uygun fiyatlı aküleri ister kapınıza getirelim ister şubelerimizden temin edebilirsiniz.">
    <meta name="author" content="Inovatik">
    <title>80 Amper ALÇAK Akü Fiyatları| Aküm Burada</title>

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Aküm Burada" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

</head>

<?php  
$urunsor=$db->prepare("SELECT * FROM urunler WHERE urun_amper = ? AND urun_standart = ? ORDER BY urun_sira ASC");
$urunsor->execute(array(80,0));
?>
<!-- Services -->
<div id="services" class="cards-2">
	<div  class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title"></div>
				<h2>80 AMPER (ALÇAK) AKÜ FİYATLARI<br> <!-- That Suits Your Needs --></h2>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
		<div class="row">
			<div class="col-lg-12">

				<!-- Card -->
				<?php  
				while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)){?>

					
					<div  class="card ">
						<div  class="card-image">
							<img  class="img-fluid" src="<?php echo $uruncek['urun_resimyol'] ?>" alt="<?php echo $uruncek['urun_alt'] ?>">
						</div>
						<div class="card-body ">
							<h3 class="card-title"><?php echo $uruncek['urun_ad'] ?> </h3>
							<ul class="list-unstyled li-space-lg">
								<li class="media">
									<i class="fas fa-square"></i>
									<div class="media-body"><?php echo $uruncek['urun_icerik_1'] ?></div>
								</li>
								<li class="media">
									<i class="fas fa-square"></i>
									<div class="media-body"><?php echo $uruncek['urun_icerik_2'] ?>	
									</div>
								</li>
							</ul>

						</div>
						<div class="button-container">
							<a  style="font-size: 20px" class="btn-solid-reg page-scroll" href="#callMe"><?php echo $uruncek['urun_fiyat'] ?></a>
						</div> <!-- end of button-container -->
					</div>
					
				
					<!-- end of card -->
				<?php } ?>

				</div> <!-- end of col -->
			</div> <!-- end of row -->
			<h4>Önemli Not : Tüm akülerin fiyatları aynı amper eski akü iadeli fiyatlardır!</h4>
	<a class="btn-outline-reg back" href="45-55-66-80-amper-aku-fiyatlari">GERİ DÖN</a>

		</div> <!-- end of container -->
	</div> <!-- end of cards-2 -->
	<!-- end of services -->




	<?php include 'footer_2.php' ?>