<?php get_header();?>
			<div class="content">
				<div class="category">
					<h1 class="category_title"><?php echo single_cat_title();?></h1>
					<div class="category_list">
					<?php
						if( have_posts() ):
						while( have_posts() ):the_post();
					?>
						<?php services_block();?>
					<?php 
						endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
<?php get_footer();?>