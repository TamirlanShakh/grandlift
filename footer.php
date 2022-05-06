<div class="footer">
				<div class="footer_top">
					<div class="footer_top_fix">
						<div class="footer_top_cal">
							<div class="footer_form">
								<div class="footer_form_title">Уже готовы заказать?</div>
								<a href="#openModal" class="footer_form_button">Заказать обратный звонок</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_bottom">
					<div Class="footer_bottom_fix">
						<div class="footer_logo"></div>
						<div class="footer_menu">
							<ul>
								<?php 	
									$menu = wp_get_nav_menu_items(4); 
									$menu_child = $menu;
									foreach ($menu as $item):
									if ($item->menu_item_parent == 0):
								 ?>
								<li>
									<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>							
								</li>
								<?php 	
									endif;
									endforeach;
								 ?>
							</ul>
						</div>
						<div class="footer_cobtacts">
							<div class="footer_phone">+7(960) 415-03-99</div>
							<div class="footer_maill">info@grandlift.r</div>
							<div class="footer_insta">Мы в инстагамм</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer();?>
	</body>
</html>