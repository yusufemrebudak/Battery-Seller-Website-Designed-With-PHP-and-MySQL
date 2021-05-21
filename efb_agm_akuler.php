<?php include 'header_2.php' ?>


<head>
    
<meta name="description" content="EFB ve AGM aküler özel geliştirilen akülerdir ve standart araç akülerine göre daha uzun ömürlüdür.EFB-AGM Akü fiyatlarını görmek için tıklayabilirsiniz.">
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
    <title>EFB-AGM Akü Fiyatları |Aküm Burada</title>

</head>

<div id="akuler" class="filter">
    <div style="margin-top:-52px" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"></div>
                <h2>Tıkla-Akü Fiyatlarını Öğren</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div style="margin-top:-40px" class="row">
            <div  class="col-lg-12">
                <!-- Filter -->

                

                    <?php
                    $urunpanosor=$db->prepare("SELECT * FROM urunler_pano  WHERE katman_seviye = ?  ORDER BY urunler_pano_sira ASC");
                    $urunpanosor->execute(array(1));	
                    while($urunpanocek = $urunpanosor->fetch(PDO::FETCH_ASSOC)){?>
                        <div class="element-item development">
                            <a href="<?php echo $urunpanocek['urunler_pano_link'] ?>"><img src="<?php echo $urunpanocek['urunler_pano_imgyol'] ?>" alt="<?php echo $urunpanocek['urunler_pano_alternative']?>"></a>
                        </div>
                    <?php } ?>

               
                <!-- end of filter -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <br>
            <a class="btn-outline-reg back" href="anasayfa">GERİ DÖN</a>

    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->




<?php include 'footer_2.php' ?>