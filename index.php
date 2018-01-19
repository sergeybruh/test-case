<?php get_header(); ?>
<?php $uri = get_template_directory_uri(); ?>
<div class="wrap">
	<!-- Блок 1 -->
	<div class="b1">
		<?php wp_nav_menu('menu=first'); ?>
		<!-- <div class="b1_nav">
			<ul class="b1_ul">
				<li class="b1_li b1_li--active">
					home
				</li>
				<li class="b1_li">
					portfolio
				</li>
				<li class="b1_li">
					about us
				</li>
				<li class="b1_li">
					contact
				</li>
			</ul>
		</div> -->
		<div class="b1_jum">
			<div class="b1_jum-left">
				<h1 class="b1_title">
					our strong <br>
organaisation
				</h1>
				<p class="b1_text">
					Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt  ut labore et. ectetur adig ipis cing elit, sed do eiusmod tempor incididunt.
				</p>
				<button class="b1_btn">Contact Us</button>
			</div>
			<div class="b1_jum-right">
				<video class="b1_video" preload="" controls="controls">
				  <source src="<?php echo $uri ?>/vid/small.mp4" loop muted>
				</video>
				<div class="b1_video-hov">
					<button class="b1_play"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Блок 2 -->
	<div class="b2">
		<div class="b2_l">
			<h2 class="b2_title">do you know we can 
provide for you ?</h2>
			<div class="b2_text">
				Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ni ipsum dolor sit amet, consectetur adipis cing elit, ed doi eiusmod tempor incididunt ut labore et.
			</div>
			<button class="b2_btn">Learn More</button>
		</div>
		<div class="b2_c"></div>
		<div class="b2_r">
			<div class="info">
				<img src="<?php echo $uri ?>/img/info_ico1.svg" alt="" class="info_ico">
				<h3 class="info_title">Management</h3>
				<p class="info_text">
					Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
				</p>
			</div>
			<div class="info">
				<img src="<?php echo $uri ?>/img/info_ico2.svg" alt="" class="info_ico">
				<h3 class="info_title">UI /UX Design</h3>
				<p class="info_text">
					Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
				</p>
			</div>
			<div class="info">
				<img src="<?php echo $uri ?>/img/info_ico3.svg" alt="" class="info_ico">
				<h3 class="info_title">Logo / Branding</h3>
				<p class="info_text">
					Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
				</p>
			</div>
			<div class="info">
				<img src="<?php echo $uri ?>/img/info_ico4.svg" alt="" class="info_ico">
				<h3 class="info_title">Animation</h3>
				<p class="info_text">
					Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
				</p>
			</div>
		</div>
	</div>
	<!-- Блок 3 -->
	<div class="b3" id="portfolio">
		<h3 class="b3_title wow tada">feature products</h3>
		<h4 class="b3_sub">Lorem ipsum dolor sit amet, consectetur adipis cing elit,sed do eiusmod tempor incididunt ut labore et.</h4>
		<div class="b3_line"></div>
		<div class="b-nav">
			<a href="#" class="b-nat_item b-nat_item--active">all</a>
			<a href="#" class="b-nat_item">print template</a>
			<a href="#" class="b-nat_item">web template</a>
			<a href="#" class="b-nat_item">user interface</a>
			<a href="#" class="b-nat_item">mock-up</a>
		</div>
		

		<?php
			$portfolio = new WP_Query(array(
				'post_type' => 'portfolio',
				'posts_per_page' =>-1
			));
		?>	
		<div class="pt wow">
			<?php while($portfolio->have_posts()):$portfolio->the_post(); ?>
			<div class="pt_item" data-type="<?php echo get_field("job_type")?>">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- Блок 4 -->
	<div class="b4 wow slideInLeft" id="about_us">
		<h3 class="b4_title">Meet our team</h3>
		<p class="b4_text">
			Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing eiusmod tempor incididut labore Ui / Ux , print template.
		</p>
		<div class="b4_line"></div>
		<div class="people">
			<div class="people_main_wrap">
				<!-- <img src="<?php echo $uri ?>/img/city.jpg" alt="" class="people_main"> -->
				<img src="/wp-content/uploads/2018/01/city_square-1-2.jpg" alt="" class="people_main">
			</div>
			<div class="people_c"></div>
			<div class="people-r">
				<h4 class="people-r_titile">mark waugh</h4>
				<p class="people-r_text">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing eiusmod tempor incididut labore Ui / Ux , print template.</p>
				<div class="people-r_links">
					<a href="" class="people-r_link people-r_fb">Facebook</a>
					<a href="" class="people-r_link people-r_db">Dribble</a>
					<a href="" class="people-r_link people-r_be">Behance</a>
					<a href="" class="people-r_link people-r_tw">Twiter</a>
				</div>
				<?php
					$services = new WP_Query(array(
						'post_type' => 'team',
						'posts_per_page' =>-1
					));
				?>	
				<div class="people-row">
					<?php while($services->have_posts()):$services->the_post(); ?>
					<a href="#" class="people-row_man">
						<!-- <img src="<?php echo $uri ?>/img/city_tall.jpg" alt=""> -->
						<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>
						<span class="people-row_name"><?php echo get_the_title(); ?></span>
						<p class="people-row_about">
							<?php echo get_the_content(); ?>
						</p>
						<div class="people-row_soc">
							<div class="people-row_fb"><?php echo get_field("facebook")?></div>
							<div class="people-row_db"><?php echo get_field("dribble")?></div>
							<div class="people-row_be"><?php echo get_field("behance")?></div>
							<div class="people-row_tw"><?php echo get_field("twiter")?></div>							
						</div>
					</a>
					<?php endwhile; ?>
			<!-- 		<a href="#" class="people-row_man">
						<img src="<?php echo $uri ?>/img/city_tall.jpg" alt="">
						<span class="people-row_name">sokina jue</span>
					</a>
					<a href="#" class="people-row_man">
						<img src="<?php echo $uri ?>/img/city_tall.jpg" alt="">
						<span class="people-row_name">sokina jue</span>
					</a>
					<a href="#" class="people-row_man">
						<img src="<?php echo $uri ?>/img/city_tall.jpg" alt="">
						<span class="people-row_name">sokina jue</span>
					</a> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Блок 5 -->
	<div class="b5" data-parallax="scroll" data-image-src="<?php echo $uri ?>/img/city_bg.jpg" data-bleed="10" data-speed="0.2">
		<h4 class="b5_title">Design tips, tricks, and freebies. Delivered weekly.</h4>
		<h5 class="b5_sub">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod.</h5>
		<form action="" class="form">
			<input type="text" class="form_email" placeholder="Email Address...">
			<button type="submit" class="form_submit">subscribe</button>
		</form>
	</div>
	<!-- Блок 6 -->
	<div class="b6" id="contact">
		<h2 class="b6_title">get in touch</h2>
		<p class="b6_text">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et.ur adipis cing elit, sed do eiusmod tempor incididunt ut labore et. ur adipis cing elit, sed do eiusmod tempor incididunt ut labore et.</p>
		<div class="b6_line"></div>
		<div class="flex-cont">
			<div class="flex-cont_bg"></div>
			<form action="" class="b6-form">
				<input placeholder="Name" type="text" class="b6-form_name">
				<div class="b6-form_of"></div>
				<input placeholder="Your Mail" type="email" class="b6-form_name b6-form_email">

				<textarea placeholder="Type your message" name="b6-form_text" id="" class="b6-form_text"></textarea>
				<button type="submit" class="b6-form_btn">
					Send message
				</button>
			</form>
			<div class="flex-cont_1"></div>
			<div class="b6-contacts">
				<h4 class="b6-contacts_title">
					contact info
				</h4>
				<p class="b6-contacts_text b6-contacts_text--address">
					Jalalabad 24 / A, Ambaarkhana, Sylhet, <br>
	Bangladesh
				</p>
				<p class="b6-contacts_text b6-contacts_text--email">
					redwan@deviserweb.com
				</p>
				<p class="b6-contacts_text b6-contacts_text--phone">
					(+88) 017 617 46373
				</p>
			</div>
		</div>
	</div>
	<!-- Блок 7 -->
	<div class="b7">
		<div class="flex">
			<p class="b7_copy">© Copyright @Junaed 2016, All rights reserved.</p>
			<div class="soc">
				<a href="" class="soc_ico"><img src="<?php echo $uri ?>/img/tw.png" alt=""></a>
				<a href="" class="soc_ico"><img src="<?php echo $uri ?>/img/ln.png" alt=""></a>
				<a href="" class="soc_ico"><img src="<?php echo $uri ?>/img/gp.png" alt=""></a>
				<a href="" class="soc_ico"><img src="<?php echo $uri ?>/img/fb.png" alt=""></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
