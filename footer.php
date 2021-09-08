	<div class="pre-footer">
		<div class="container">
			<?php
				if (has_nav_menu('principal')) {
					wp_nav_menu( 
						array( 
							'theme_location' => 'principal', 
							'menu_class' => 'footer-menu',
							'menu_id' => 'footer-nav',
							'container_class' => 'menu-principal-footer', 
							'container_id' => 'menu-principal-footer' ,
							'walker' => new OrganizacaoMenuPrincipal()
						) 
					);
				}
			?>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-2 footer-data">
					<div class="element-footer">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="img-fluid footer-logo" alt="">
					</div>
					<div class="element-footer">						
						<div class="footer-site">
							<div class="list-socials">
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank">
										<i class="fab fa-facebook-square">
										</i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank">
										<i class="fab fa-instagram">
										</i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('youtube'); ?>" target="_blank">
										<i class="fab fa-youtube">
										</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 footer-about">
					<div class="element-footer">
						<h3>Endereço</h3>
						<div class="text-footer">
							<p>Avenida das Américas, 17.150 - Bloco 1 Sala 205</p>
							<p>Recreio dos Bandeirantes, Rio de Janeiro - RJ</p>
							<p>22790-704</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php
	if (is_front_page()) {
		?>
		<script>
		$(document).ready(function () {
            function gtag_report_conversion() {
                gtag('create', 'AW-824599583', 'auto');
                gtag('event', 'conversion', { 'send_to': 'AW-824599583/cNbWCMOUzcQBEJ_ImYkD' });
                console.log('Ads');
            }
            function callConversion() {
                gtag_report_conversion();
            }
            $(".form-area").on('submit', function() { callConversion() });
        });
		</script>
		<?php
	}
	?>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bbf6f323dad74f2"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/inc/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions-store.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php wp_footer(); ?>
</div>
</body>
</html>