<section class="home-communication section">
	<div class="container">
		<h1>PARCERIA COM OS PRINCIPAIS VEÍCULOS DE COMUNICAÇÃO</h1>
		<hr>
		<div class="content-communication">
			<div class="list-communication row">
				<?php 
				$listCommunication = array(
					'logo-globo.png',
					'logo-record.png',
					'logo-sbt.png',
					'logo-band.png',
					'logo-tupi.png',
					'logo-redetv.png',
				);
				foreach($listCommunication as $communicationCurrent) {
					?>
					<div class="single-communication col-md-4 col-6">
						<img src="<?php bloginfo('template_url'); ?>/img/communication/<?php echo $communicationCurrent; ?>" alt="">
					</div>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
</section>