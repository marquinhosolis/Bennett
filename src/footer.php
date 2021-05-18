<footer>
	<?php 
		if( !is_page(array(6,3, 302)) ){
			echo '<div class="ctaFakeBg"></div>';
		}
	?>
	<div class="container">
		<div class="logoFooter">
			<img src="<?php echo get_template_directory_uri(); ?>/images/bennett-logo-white.png" alt="Bennet Logo Insurance">
		</div>
		<address>
			<div class="address">
				<a href="<?php theme_variables('google_maps_link_north_orlando'); ?>" target="_blank">
					<strong>North Orlando</strong><br>
					<?php theme_variables('address_north_orlando'); ?>
				</a>
			</div>
			<div class="address">
				<a href="<?php theme_variables('google_maps_link_winter_springs'); ?>" target="_blank">
					<strong>Winter Springs</strong><br>
					<?php theme_variables('address_winter_springs'); ?>
				</a>
			</div>
			<div class="phone">
				<strong>Office</strong><br>
				<a href="tel:<?php theme_variables('phone'); ?>"><?php theme_variables('phone'); ?></a>
			</div>
			
		</address>
		<div class="footerLinks">
			<a href="<?php echo site_url('/employee-benefits/');?>">Employee Benefits</a><br>
			<a href="<?php echo site_url('/individual-insurance/');?>"> Individual Insurance</a>
		</div>
		<div class="legalLinks">
			<ul>
				<li>
					<a href="<?php echo site_url('/privacy-policy/'); ?>">Privacy Policy</a>
				</li>
				<!-- <li>
					<a href="#">Terms of Service</a>
				</li> -->
				<li>
					<a href="<?php echo site_url('/disclaimer/'); ?>">Disclaimer</a>
				</li>
			</ul>
			
		</div>
	
	</div>
	<?php require_once('partials/logo-dppa-footer.php'); ?>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js" integrity="sha512-DMVsZXgX4yFXz69Stig0g783PuBnl245OQV2qj5gSHTVUAuSeqRolBbaqiungKghnEPYee081WTTN6WA4BPYww==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script src="https://use.fontawesome.com/1983581bba.js"></script>
<?php wp_footer(); ?> 
</body>
</html>