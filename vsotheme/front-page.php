<?php get_header(); ?>
			<!-- Extra -->
			<div id="marketing" class="container">
				<div class="row">
					<div class="3u">
						<section>
							<header>
								<h2>Feugiat Tempus</h2>
							</header>
							<p class="subtitle">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics13.jpg" alt=""></a></p>
							<a href="#" class="button">More</a>
						</section>
					</div>
					<div class="3u">
						<section>
							<header>
								<h2>Maecenas lectus</h2>
							</header>
							<p class="subtitle">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics14.jpg" alt=""></a></p>
							<a href="#" class="button">More</a>
						</section>
					</div>
					<div class="3u">
						<section>
							<header>
								<h2>Luctus lectus</h2>
							</header>
							<p class="subtitle">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics15.jpg" alt=""></a></p>
							<a href="#" class="button">More</a>
						</section>
					</div>
					<div class="3u">
						<section>
							<header>
								<h2>Posuere eleifend</h2>
							</header>
							<p class="subtitle">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics16.jpg" alt=""></a></p>
							<a href="#" class="button">More</a>
						</section>
					</div>
				</div>
			</div>
			<!-- /Extra -->
				
			<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="6u">
						<?php 
						if(have_posts()):
							while(have_posts()):
								the_post();

					?>
						<section>
							<header>
								<h2><?php the_title(); ?></h2>
							</header>
							<p><?php the_content(); ?></p>
						</section>

						<?php 
							endwhile;
						endif;
						?>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>Feugiat Tempus</h2>
							</header>
							<ul class="style2">
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics07.jpg" alt=""></a>
									<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics08.jpg" alt=""></a>
									<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics09.jpg" alt=""></a>
									<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pics10.jpg" alt=""></a>
									<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
								</li>
							</ul>						
						</section>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>Feugiat Tempus</h2>
							</header>
							<ul class="style1">
								<li><a href="#">Maecenas luctus lectus at sapien</a></li>
								<li><a href="#">Etiam rhoncus volutpat erat</a></li>
								<li><a href="#">Donec dictum metus in sapien</a></li>
								<li><a href="#">Nulla luctus eleifend purus</a></li>
								<li><a href="#">Maecenas luctus lectus at sapien</a></li>
							</ul>
						</section>
						<section class="sidebar">
							<header>
								<h2>Nulla luctus eleifend</h2>
							</header>
							<ul class="style1">
								<li><a href="#">Maecenas luctus lectus at sapien</a></li>
								<li><a href="#">Donec dictum metus in sapien</a></li>
								<li><a href="#">Integer gravida nibh quis urna</a></li>
								<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
								<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
			<!-- Main -->

<?php get_footer(); ?>

