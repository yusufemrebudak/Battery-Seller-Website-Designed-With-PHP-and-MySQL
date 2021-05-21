<?php include 'header_2.php' ?>

<head> 

    <meta name="description" content="Aküden dolayı yolda kalan insanların en sık yaşadığı 4 OLAY - Bu olaylarda,sıkıntının aküden mi yoksa aracın başka bir parçasından mı kaynaklandığı anlatılıyor. ">
    <meta name="author" content="Inovatik">
    <title>Akünün Arızalı Olduğunu Nasıl Anlarım|Aküm Burada</title>

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
<?php  
$aku_soru_sor=$db->prepare("SELECT * FROM aku_sorular WHERE aku_soru_id = ?");
$aku_soru_sor->execute(array(2));
$aku_soru_cek=$aku_soru_sor->fetch(PDO::FETCH_ASSOC);

?>

<div  class="container">
    <div style="margin-top: 120px" class="row">
        <div class="col-md-12">
            <h1 style="font-size: 32px"><?php echo $aku_soru_cek['aku_soru'] ?></h1>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->

<!-- end of header -->




<!-- Privacy Content -->
<div class="ex-basic-2">
    <div style="margin-top: -60px" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <!-- <h3>?></h3>-->
                    <p><?php echo $aku_soru_cek['aku_cevap_ic0']  ?></p>
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde1']  ?></div>
                                </li>
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde2']  ?></div>
                                </li>
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde3']  ?></div>
                                </li>
                                
                            </ul>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                    <p><?php echo $aku_soru_cek['aku_cevap_ic1']  ?></p>

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde4']  ?></div>
                                </li>   
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde5']  ?></div>
                                </li>
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde6']  ?></div>
                                </li>
                                <li class="media">
                                    <i style="font-size: 18px" class="fas fa-arrow-right"></i>
                                    <div class="media-body"><?php echo $aku_soru_cek['aku_cevap_madde7']  ?></div>
                                </li>
                                
                            </ul>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                </div> <!-- end of text-container-->


                <a class="btn-outline-reg back" href="akunun-bittigini-gösteren-isaretler">Akünün Bittiğini Gösteren 8 İşaret</a>
                <a class="btn-outline-reg back" href="akunun-bittigini-nasil-anlariz">Akünün Bittiğini Nasıl Anlarız</a>
                <a class="btn-outline-reg back" href="aku-secimi-nasil-yapilir">Akünün Seçimi Nasıl Yapılmalı</a>

                <a class="btn-outline-reg back" href="sik-sorulan-sorular">Sıkça Sorulan Sorular</a>

                <a class="btn-outline-reg back" href="index.php#header">BACK</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->

<?php include 'footer_2.php' ?>