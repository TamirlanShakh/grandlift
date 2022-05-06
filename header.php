<html>
	<head>
		<title>GRANDLIFT</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/modal.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/JS/scripts.js"></script>
		<?php wp_head();?>
	</head>
	<body>
		<div class="main">
			<div class="header">
				<div class="header_fix">
					<a href="<?php echo get_home_url();?>" class="header_logo" style="background: url('<?php echo get_field('лого',32);?>')no-repeat center;"></a>
					<div class="header_menu">
					<ul>
						<?php 	
							$menu = wp_get_nav_menu_items(4); 
							$menu_child = $menu;
							foreach ($menu as $item):
							if ($item->menu_item_parent == 0):
						 ?>
						<li>
							<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
							<ul class="child_menu">
								<?php 
									foreach ($menu_child as $child_item) :
									if ($child_item->menu_item_parent == $item->ID) :
								 ?>
								<li><a href="<?php echo $child_item->url; ?>"><?php echo $child_item->title; ?></a></li>
								<?php 
									endif;
									endforeach;
								 ?>
							</ul>
						</li>
						<?php 	
							endif;
							endforeach;
						 ?>
					</ul>
					</div>
					<div class="header_call">
						<a href="#openModal">Заказать звонок</a>
					</div>
				</div>
			</div>
			<div id="openModal" class="modal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<h3 class="modal-title">Получить консультацию</h3>
						<a href="#close" title="Close" class="close">×</a>
					  </div>
					  <div class="modal-body">    
						<?php echo do_shortcode('[contact-form-7 id="29" title="Заказать звонок"]');?>
					  </div>
					</div>
				  </div>
			</div>
			<div id="openModal2" class="modal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<h3 class="modal-title">Заказать услугу</h3>
						<a href="#close" title="Close" class="close">×</a>
					  </div>
					  <div class="modal-body">    
						<?php echo do_shortcode('[contact-form-7 id="70" title="Заказать услугу"]');?>
					  </div>
					</div>
				  </div>
			</div>
			<?php if(!is_home()):?>
			<div class="contacts">
					<div class="contacts_fix">
						<a class="contacts_insta" href="">мы в инстагамм</a>
						<div class="contacts_mail">info@grandlift.ru</div>
						<div class="contacts_call">ПОЗВОНИТЕ НАМ<br><span>МЫ ВАС ЖДЕМ</span></div>
						<div class="contacts_tel">+7(960) 415-03-99</div>
					</div>
			</div>
			<?php endif;?>