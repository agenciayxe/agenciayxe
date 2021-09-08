<section class="home-certification section">
	<div class="container">
		<h1>UMA AGÊNCIA CERTIFICADA E RECONHECIDA</h1>
		<hr>
		<div class="content-certification">
			<div class="list-certification row justify-content-center">
				<?php 
				$listCertification = array(
					'selo-google.png',
					'selo-fenapro.png',
					'selo-cenp.png',
				);
				foreach($listCertification as $certificationCurrent) {
					?>
					<div class="single-certification col-md-4 col-6">
						<img src="<?php bloginfo('template_url'); ?>/img/certification/<?php echo $certificationCurrent; ?>" alt="">
					</div>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
</section>