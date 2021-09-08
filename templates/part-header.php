<header <?php if (!is_front_page()) { echo ' class="header-background"'; } ?>>
	<div class="header-area" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/img/background-banner-desktop.png');">
		<div class="container">
			<div class="header-background<?php if (!is_front_page()) { echo ' front-header'; } ?>"></div>
			<div class="header-main">
				<div class="logo">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
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
				<div class="nav-button">
					<div class="hamburger hamburger--squeeze">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				<nav>
					<?php 
					if (has_nav_menu('principal')) {
						wp_nav_menu( 
							array( 
								'theme_location' => 'principal', 
								'menu_class' => 'header-menu',
								'menu_id' => 'header-nav',
								'container_class' => 'menu-principal-header', 
								'container_id' => 'menu-principal-header' ,
								'walker' => new OrganizacaoMenuPrincipal()
							) 
						);
					}
					?>
				</nav>
			</div>
			<div id="pre-list-container" class="header-buttons">
				<div class="header-list-buttons">
					<a href="tel:+552133252407" target="_blank">
						<button class="button-call" type="button">
							<i class="fas fa-phone"></i> (21) 3325-2407
						</button>
					</a>
					<a href="tel:+552131180419" target="_blank">
						<button class="button-call" type="button">
							<i class="fas fa-phone"></i> (21) 3118-0419
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="header-bar">
	<?php 
	if (has_nav_menu('menumobile')) {
		wp_nav_menu( 
			array( 
				'theme_location' => 'menumobile', 
				'menu_class' => 'header-menu',
				'menu_id' => 'header-nav',
				'container_class' => 'menu-principal-header', 
				'container_id' => 'menu-principal-header' ,
				'walker' => new OrganizacaoMenuPrincipal()
			) 
		);
	}
	?>
	<div id="pre-socials-container" class="pre-socials-container">
		<ul id="pre-list-ul" class="pre-header-list">
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('youtube'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="mailto:<?php echo InfoVar::show('email'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="far fa-envelope"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('phone'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fas fa-phone"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
<?php if (is_front_page()) { get_template_part('templates/home', 'banner'); } ?>