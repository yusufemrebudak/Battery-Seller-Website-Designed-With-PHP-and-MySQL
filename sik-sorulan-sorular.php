<?php include 'header_2.php' ?>

<head>
    
<meta name="description" content="Akülerle ilgili en sık sorulan sorular bölümü , çoğu müşterimizin birçok soruna yanıt olabilecektir.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>En Sık Sorulan Sorular|Aküm Burada</title>

</head>

<br>
<br>


<!-- Details 1 -->
<div  id="sik-sorulan-sorular" class="accordion">
	<!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
	<div  style="margin-top: -60px" class="container">

		<div class="row">
			<div class="col-lg-5 col-xl-6">
				<!-- Accordion -->
				<div  class="accordion-container" id="accordionOne">
					<h1 style="font-size: 32px">Sıkça Sorulan Sorular</h1>
					<?php  
					$sorusorgu=$db->prepare("SELECT * FROM sorular ORDER BY soru_sira ASC");
					$sorusorgu->execute();
					while($sorucek = $sorusorgu->fetch(PDO::FETCH_ASSOC)){?>
						<div  class="item">
							<div id="<?php echo $sorucek['soru_head'] ?>">
								<span  data-toggle="collapse" data-target="#<?php echo $sorucek['soru_collapse'] ?>" aria-expanded="<?php echo $sorucek['soru_true'] ?>" aria-controls="<?php echo $sorucek['soru_collapse'] ?>" role="button">
									<span class="circle-numbering"><?php echo $sorucek['soru_sira'] ?></span><span class="accordion-title"><?php echo $sorucek['soru_adi'] ?></span>
								</span>
							</div>
							<div id="<?php echo $sorucek['soru_collapse'] ?>" class="collapse " aria-labelledby="<?php echo $sorucek['soru_head'] ?>" data-parent="#accordionOne">
								<div class="accordion-body">
									<?php echo $sorucek['soru_cevap'] ?>
								</div>
							</div>
						</div> <!-- end of item -->
					<?php  }?>


				</div> <!-- end of accordion-container -->
				<!-- end of accordion -->
				
			</div>
			<div class="col-lg-12">
				<a class="btn-outline-reg back" href="akunun-bittigini-gösteren-isaretler">Akünün Bittiğini Gösteren 8 İşaret</a>
                <a class="btn-outline-reg back" href="akunun-bittigini-nasil-anlariz">Akünün Bittiğini Nasıl Anlarız</a>
                <a class="btn-outline-reg back" href="aku-secimi-nasil-yapilir">Akünün Seçimi Nasıl Yapılmalı</a>

                <a class="btn-outline-reg back" href="sik-sorulan-sorular">Sıkça Sorulan Sorular</a>

                <a class="btn-outline-reg back" href="index.php#header">BACK</a>
			</div>

		</div> <!-- end of area-2 -->
	</div> <!-- end of accordion -->
	<!-- end of details 1 -->





	<br>





	<?php include 'footer_2.php' ?>