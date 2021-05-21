<?php include 'header.php'; ?>



<head> 

    <meta name="description" content="Amir&Şamil Akü Bursa içi 4 şubesi,ucuz akü fiyatları ve kapıya servis imkanıyla beraber MUTLU-VARTA-İNCİ-ÇELİK Akü yetkili satış mağazasıdır.">
    <meta name="author" content="Inovatik">
    <title>Aküm Burada | Bursa'da Kaliteli ve Uygun Fiyatlı Akünün Adresi</title>

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Aküm Burada" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

</head>
<!-- Header -->




 <header style="margin-top: -5px" id="header" class="header">
        <div  class="header-content">
            <div  class="container">
                <div  class="row">
                    <div  class="col-lg-12">
                        <div  class="text-container">
                           
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


<div style="margin-top: -110px" id="akuler" class="filter">
    <div  class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"></div>
            <h2>Tıkla~Akü Fiyatlarını Öğren</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div style="margin-top: -50px" class="row">
            <div class="col-lg-12">
                <!-- Filter -->

               

                    <?php
                    $urunpanosor=$db->prepare("SELECT * FROM urunler_pano WHERE katman_seviye = ? ORDER BY urunler_pano_sira ASC");
                    $urunpanosor->execute(array(0));
                    while($urunpanocek = $urunpanosor->fetch(PDO::FETCH_ASSOC)){?>
                        <div class="element-item development">
                            <a href="<?php echo $urunpanocek['urunler_pano_link'] ?>"><img src="<?php echo $urunpanocek['urunler_pano_imgyol'] ?>" alt="<?php echo $urunpanocek['urunler_pano_alternative']  ?>"></a>
                        </div>
                    <?php } ?>

                
                <!-- end of filter -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->


<?php include 'servis_adresler.php' ?>



<!-- Testimonials -->
<div style="margin-top: -60px" class="slider">
    <div style="margin-top: -70px" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Müşteri Yorumları</h2>
                <p class="p-heading"> </p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            <?php
                            $mesajsor=$db->prepare("SELECT * FROM mesaj WHERE mesaj_aktif = ?");
                            $mesajsor->execute(array(1));
                            while($mesajcek = $mesajsor->fetch(PDO::FETCH_ASSOC)){?>
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/no-photo-man.png" alt="alternative">
                                    <div class="card-body">
                                        <div class="testimonial-text"><?php echo $mesajcek['mesaj_icerik'] ?></div>
                                        <div class="testimonial-author"><?php echo $mesajcek['mesaj_isim_soyisim'] ?></div>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        <?php } ?>


                            <!-- Slide -->
                                               
                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of sliedr-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider -->
<!-- end of testimonials -->

<?php include 'contact.php' ?>

<?php include 'footer.php' ?>