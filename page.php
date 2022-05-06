<?php get_header();?>
			<div class="content">
				<div class="page">
					<h1 class="page_title"><?php the_title();?></h1>
					<?php
					if( have_posts() ):
					while( have_posts() ):the_post();
					?>
					<div class="page_text"><?php the_content();?></div>
					<?php 
						endwhile;
						endif;
					?>
				</div>
			</div>
<?php get_footer();?>