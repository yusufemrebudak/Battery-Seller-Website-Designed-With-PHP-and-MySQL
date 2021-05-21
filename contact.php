
<?php 
include 'netting/baglan.php'; 


?>

<!-- Contact -->
<div style="margin-top: -80px" id="contact" class="form-2">
	<div style="margin-top: -60px" class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="text-container">
					<div class="section-title">CONTACT</div>
					<h2>Şikayet ve Memnuniyetleriniz Bizim için Önemli</h2>
					<ul class="list-unstyled li-space-lg">
						<li class="address"><i class="fas fa-map-marker-alt"></i>Merkez: Ankarayolu Cd. Anadolu Mh. No:113 Yıldırım/Bursa</li>
						<li><i class="fas fa-phone"></i><a href="tel://+905549515149">+905549515149</a></li>
						<li><i class="fas fa-phone"></i><a href="tel://+905549515146">+905549515146</a></li>
					</ul>
                    <!--
                    <h3>Follow Aria On Social Media</h3>

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
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-pinterest fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-linkedin-in fa-stack-1x"></i>
                        </a>
                    </span>
                -->
            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
        <div class="col-lg-6">

        	<!-- Contact Form -->
        	<form action="netting/islem.php" method="POST"  data-toggle="validator" data-focus="false">
        		<div class="form-group">
        			<input type="text" class="form-control-input" name="mesaj_isim_soyisim" id="cname" required="required" >
        			<label class="label-control" for="cname">İsim - Soyisim</label>
        			<div class="help-block with-errors"></div>
        		</div>
        		<div clas="form-group">
        			<input type="text" class="form-control-input" name="mesaj_mail_or_telefon" id="cemail" required="required" >
        			<label class="label-control" for="cemail">Telefon numarası</label>
        			<div class="help-block with-errors"></div>
        		</div>
        		<div class="form-group">
        			<textarea class="form-control-textarea" name="mesaj_icerik" id="cmessage" required="required" ></textarea>
        			<label class="label-control" for="cmessage">Mesajınız</label>
        			<div class="help-block with-errors"></div>
        		</div>
                    <!--
                    <div class="form-group checkbox">
                        <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                        <div class="help-block with-errors"></div>
                    </div>
                -->

                <div class="form-group">
                	<button type="submit" name="mesaj_geldi" class="form-control-submit-button">MESAJI GÖNDER</button>
                </div>
					
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
					
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->