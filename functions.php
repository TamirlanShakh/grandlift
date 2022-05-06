<?php 
	function services_block() 
	{
		?>
		<div class="services_block" href="<?php the_permalink(); ?>">
			<div class="services_block_title" style="background: url('<?php echo get_field('изображение')['sizes']['medium_large'];?>') no-repeat center;">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<a href="#openModal2" class="services_block_button" title="<?php the_title(); ?>">Заказать</a>
		</div>
		<?php
	}	
	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
	function theme_register_nav_menu() {
		register_nav_menu( 'topmenu', 'Верхнее меню' );
	}
?>
