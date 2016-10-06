	<?php /* Template Name: IT-Compliance Baukastensystem */ get_header();
	$args = array(
		'category'         => 1,
		'orderby'          => 'name',
		'order'            => 'ASC',
		'post_type'        => 'info-page'
	);
	$posts = get_posts($args);
	?>

	<div class="header_bild">
		<div class="caption">
			<h1 class="big_text1"><?php the_title(); ?></h1>
		</div>
	</div>

<div class="compliance_content padding_top_bot" id="accordion">
	<div class="container">
		<div class="col-md-4">
			<?php if (have_posts()): while (have_posts()) : $posts; ?>
<!--				--><?php //if (is_category('info-page')) : ?>
			<ul class="baukastensysteme" >
				<li><a id="post-<?php get_the_ID(); ?>" data-parent="#accordion" href="#<?php get_the_ID(); ?>" data-toggle="collapse" ><?php get_the_title(); ?></a></li>
			</ul>
		</div>
	</div>
</div>
<!--				--><?php //endif; ?>
		<?php endwhile; ?>

		<?php else: ?>


				<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

			<script>
				$(".baukastensysteme a").click(function(){
					$(".collapse_content").collapse('hide');
				});

				$('.collapse_content').on('hide.bs.collapse', function () {
					$('.collapse_content').on('show.bs.collapse');
				});
			</script>


