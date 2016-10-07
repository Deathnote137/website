<?php /* Template Name: IT-Compliance Baukastensystem */
get_header();
$args = array(
    "posts_per_page" => -1,
    "tax_query" => array(
        array(
            "taxonomy" => "category",
            "field" => "slug",
            "terms" => "info-page",
        )
    ),
    "orderby" => "post_title",
    "order" => "ASC",
); ?>

<div class="header_bild">
    <div class="caption">
        <h1 class="big_text1"><?php the_title(); ?></h1>
    </div>
</div>

<div class="compliance_content padding_top_bot" id="accordion">
    <div class="container">
        <div class="col-md-4">
            <ul class="baukastensysteme">
                <?php $posts_array = get_posts($args);
                foreach ($posts_array as $key => $post) { ?>
                    <li><a id="post-<?= $post->ID; ?>" class="<?= $key == 0 ? "" : "collapsed" ?>" data-parent="#accordion" href="#<?= $post->ID; ?>" data-toggle="collapse"><?= $post->post_title; ?></a></li>
                <? } ?>
            </ul>
        </div>

        <div class="col-md-8">
            <?php $posts_array = get_posts($args);
            foreach ($posts_array as $key => $post) { ?>
                <div class="collapse_content collapse <?= $key == 0 ? "in" : "" ?>" id="<?= $post->ID; ?>">
                    <div class="baukastensysteme_title marker_title_left">
                        <h1><?= $post->post_title; ?></h1>
                    </div>
                    <div class="first_content">
                        <?= $post->post_content ?>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>

<script>
    jQuery(".baukastensysteme a").click(function () {
        jQuery(".collapse_content").collapse('hide');
    });
    jQuery('.collapse_content').on('hide.bs.collapse', function () {
        jQuery('.collapse_content').on('show.bs.collapse');
    });
</script>


<?php get_footer(); ?>


<!--echo "<h1>" . $post->post_title . "</h1><br>";-->
<!--echo "<p>" . $post->post_content . "</p><br>"; ?>-->
