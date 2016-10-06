<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<div class="header_content">
					<div class="caption">
						<span class="small_text1"><?php the_cfc_field('frontpage', 'title-small'); ?></span>
						<h1 class="big_text1"><span><?php the_cfc_field('frontpage', 'title-orange'); ?></span><?php the_cfc_field('frontpage', 'title'); ?></h1>
					</div>
				</div>

				<div class="middle1_content">
					<div class="container padding_top_bot">
						<div class="col-md-4 marker_title_left">
							<h1 class="big_text2">COMPLIANCE ANFORDERUNGEN</h1>
						</div>
						<div class="col-md-8">
							<p class="small_text2"><?= get_post_meta(get_the_ID(),"content1_text", true ) ?></p>
						</div>
					</div>
				</div>

				<div class="slider_content">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<div class="slider_title marker_title">
							<h1>STIMMEN UNSERER KUNDEN</h1>
						</div>
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="caption">
                                <span class="main_text"><?php the_cfc_field('slider_front', 'slider-text-1'); ?></span>
									<p class="customer"><?php the_cfc_field('slider_front', 'slider-kunde-1'); ?></p>
								</div>
							</div>
							<div class="item">
								<div class="caption">
                                <span class="main_text"><?php the_cfc_field('slider_front', 'slider-text-2'); ?></span>
									<p class="customer"><?php the_cfc_field('slider_front', 'slider-kunde-2'); ?></p>
								</div>
							</div>
							<div class="item">
								<div class="caption">
                                <span class="main_text"><?php the_cfc_field('slider_front', 'slider-text-3'); ?></span>
									<p class="customer"><?php the_cfc_field('slider_front', 'slider-kunde-3'); ?></p>
								</div>
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="fa fa-angle-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="fa fa-angle-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

				<div class="middle2_content">
					<div class="container padding_top_bot">
						<div class="title marker_title">
							<h1>DIE DÖGEL IT-EXPERTS</h1>
						</div>
						<div class="col-md-7 experts_list">
							<?php the_cfc_field('it-experts', 'experts-content'); ?>
							<div class="website">
                            	<span class="website_link">
                                	<a href="http://www.doegel.de/" target="_blank">Zur Website</a>
                            	</span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="it_experts_img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/it_experts.jpg">
								<p>Geschäftsführer Oliver Lorenz und Torsten Bettzüge</p>
							</div>
						</div>
					</div>
				</div>

				<div class="middle3_content">
					<div class="container padding_top_bot">
						<div class="title marker_title">
							<h1>STARKE PARTNER FÜR STARKE LÖSUNGEN</h1>
						</div>
						<div class="row">
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/8man.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/deskcenter.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/docusnap.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/wallix.png"></div>
						</div>
						<div class="row">
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/egosecure.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/greenbone.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/qualys.png"></div>
							<div class="col-md-3 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/img/macmon.png"></div>
						</div>
					</div>
				</div>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
