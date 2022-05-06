<?php get_header();?>
			<div class="content">
				<div class="offer">
					<div class="offer_fix">
						<div class="offer_title"><span>Качественное обслуживание</span> и монтаж лифтового оборудования</div>
						<div class="offer_form">
							<hr size="2px" color="#fea100" width="150px">
							<div class="offer_form_title">Оставьте заявку на бесплатную консультацию прямо сейчас!</div>
							<hr size="2px" color="#fea100" width="75px">
							<div class="offer_form_inputs">
								
						<?php echo do_shortcode('[contact-form-7 id="30" title="Консультация"]')?>
							</div>
							<div class="offer_form_desc">При отправке формы вы даете свое согласие на обработку персональных данных</div>
						</div>
					</div>
				</div>
				<div class="contacts">
					<div class="contacts_fix">
						<a class="contacts_insta" href="<?php echo get_field('инстаграм', 32);?>">мы в инстагамм</a>
						<div class="contacts_mail"><?php echo get_field('почта', 32);?></div>
						<div class="contacts_call">ПОЗВОНИТЕ НАМ<br><span>МЫ ВАС ЖДЕМ</span></div>
						<div class="contacts_tel"><?php echo get_field('телефон', 32);?></div>
					</div>
				</div>
				<div class="services">
					<div class="services_fix">
						<div class="services_title">Наши услуги.</div>
						<div class="services_list">
							<?php
								$query = new WP_Query(
									array(
										'category__in' => array(2),
										'posts_per_page' => 1,
										
										'meta_key' => 'отображать_на_главной',
										'meta_value' => true,
										'meta_compare' => '='
									)
								);
								if( $query->have_posts() ):
								while( $query->have_posts() ):$query->the_post();
							?>
								<?php services_block();?>
							<?php 
								endwhile;
								endif;
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				<div class="about">
					<div class="about_fix">
						<div class="about_fix_title">О КОМПАНИИ</div>
						<div class="about_fix_list"><?php echo get_field('о_компании', 32); ?></div>
					</div>
				</div>
				
				<div class="plus">
					<div class="plus_fix">
						<?php 
							$prems = get_field('преимущества', 32);
							foreach ($prems as $prem ):
						?>
						<div class="plus_block">
							<div class="plus_block_title"><?php echo $prem['название'] ?></div>
							<div class="plus_block_img"><img src="<?php echo $prem['иконка'] ?>"></div>
							<div class="plus_block_desk"><?php echo $prem['описание'] ?></div>
						</div>
						<?php 
							endforeach;
						 ?>
					</div>
				</div>
			</div>

<?php get_footer();?>