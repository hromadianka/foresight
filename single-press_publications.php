<?php get_header(); ?>

<div class="single-press-publications-container">
    <?php
	$post_type = get_post_type($post);
	$post_type_object = get_post_type_object($post_type);
	$post_type_label = $post_type_object->labels->singular_name;
	?>
	<p class="card-category"><?php echo esc_html($post_type_label); ?></p>

    <h2><?php the_title(); ?></h2>

    <?php
    $link = get_field('link');
    ?>
    <p>
        <a href="<?php echo esc_url($link); ?>" 
           target="_blank" 
           style="color: black; text-decoration: underline; font-weight: bold;">
            <?php echo esc_url($link); ?>
        </a>
    </p>

    <div class="post-content" style="font-size: 16px">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>