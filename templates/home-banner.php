<div class="home-section home-topo container-fluid <?php if (!is_front_page()) { echo 'page-header'; } ?>">
	<div class="row">
		<div class="home-banner col-md-12" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/background-banner-desktop.png');">
			<?php
			if (is_front_page()) {
				?>
				<div class="area-feature container">
					<div class="row row-feature">
						<div class="box-feature col-md-6">
							<h3>Focados em gerar crescimento ao seu negócio.</h3>
							<div class="text-padded">
								<h4><span>A agência que pensa fora da caixa! A YXE ajuda você a concretizar sua ideia, desde o planejamento até a veiculação e a análise de resultados.</span></h4>
							</div>
							<a href=""><button class="btn-default btn-inverted">SAIBA MAIS</button></a>
						</div>
					</div>
				</div>
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
				<?php
			}
			?>
		</div>		
	</div>
</div>