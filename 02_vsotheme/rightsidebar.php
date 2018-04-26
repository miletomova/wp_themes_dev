<?php 

/**
* Template name: Right Sidebar
*
*/

get_header(); ?>
			<!-- Main -->
			<div id="main" class="container">
				<div class="row">								
					<div class="9u skel-cell-important">

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
							<?php get_sidebar('left-sidebar'); ?>
						</section>						
					</div>	
				</div>
			</div>
			<!-- Main -->
<?php get_footer(); ?>