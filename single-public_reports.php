<?php get_header(); ?>

<div class="single-public-reports-container">
    <?php
	$post_type = get_post_type($post);
	$post_type_object = get_post_type_object($post_type);
	$post_type_label = $post_type_object->labels->singular_name;
	?>
	<p class="card-category"><?php echo esc_html($post_type_label); ?></p>

    <h2><?php the_title(); ?></h2>

    <?php
    $authors = get_field('authors');
    $date = get_field('date');
    $date_timestamp = strtotime($date);
	$formatted_date = date_i18n('d.m.Y', $date_timestamp);
    ?>
    <p style="font-weight: bold;">Автор: <?php echo esc_html($authors); ?></p>
    <p style="font-weight: bold;">Дата: <?php echo esc_html($formatted_date); ?></p>

    <p style="font-weight: bold; font-size: 16px">
        ↪
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
           target="_blank" 
           style="color: black; text-decoration: underline; font-weight: bold; font-size: 16px">
            Поділитися у Facebook
        </a>
    </p>

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" style="width: 100%; margin-bottom: 25px">
    <?php endif; ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
