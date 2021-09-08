<section class="section section-tips">
	<div class="container">	
		<h1>BLOG</h1>
		<hr>
		<p class="description-tips text-center">Para <strong>vender</strong> um serviço é preciso ter <strong>autoridade no assunto</strong>!</p>
		<div class="row list-tips list-posts"> 	
			
			<?php 
			$argsTips = array(
				'post_type' => 'dicas',
				'posts_per_page' => 3
			);
			$listTips = new WP_Query($argsTips);
			if ($listTips->have_posts()) {
				while ($listTips->have_posts()) {
					$listTips->the_post();
					?>
					<div class="col-md-4 col-sm-6">
						<a href="<?php the_permalink(); ?>">
							<div class="content">
								<?php
								if (has_post_thumbnail()) { ?><div class="img-default" style="background-image: url('<?php echo the_post_thumbnail_url('medium') ?>');"></div><?php } else { ?><div class="img-default"><h3><?php the_title(); ?></h3></div><?php }
								?>
								<div class="text">
									<h2><?php the_title(); ?></h2>
									<span class="view-more">Ver Mais </span>
								</div>
							</div>
						</a>
					</div>
					<?php 
				}
			}
			?>
			<div class="col-md-12 text-center">
				<a href="<?php echo get_post_type_archive_link('dicas'); ?>">
					<button type="button" class="button-default">
					VER TODOS OS ARTIGOS
					</button>
				</a>
			</div>
		</div>
	</div>
</section>