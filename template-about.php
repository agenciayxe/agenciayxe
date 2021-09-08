<?php 
/*
Template Name: Sobre
*/
get_header(); 
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography">
			<section class="row">
				<div class="col-md-6">
					<div class="about-figure">
						<div class="image-figure img-circle" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/banner-equipe.jpg');" alt="">
						</div>
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/banner-equipe.jpg" class="img-fluid rounded-circle" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="title-section">
								<h3>
									AGÊNCIA YXE
								</h3>
								<p>Nossa História</p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="content-section">
								<p>A Agência YXE é uma agência focada no crescimento do seu negócio. Estamos em constante atualização e aprendizado. Somos uma empresa totalmente adaptada ao novo mundo digital. Venha fazer parte desse mundo e descobrir resultados incríveis para o seu negócio.</p>
								<p>A Agência YXE é uma agência focada no crescimento do seu negócio. Estamos em constante atualização e aprendizado. Somos uma empresa totalmente adaptada ao novo mundo digital. Venha fazer parte desse mundo e descobrir resultados incríveis para o seu negócio.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="content-icons-about my-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-1.jpg'; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-2.jpg'; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-3.jpg'; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>