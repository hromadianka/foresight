<?php
/*
Template Name: Публікації
*/
?>

<?php get_header(); ?>

<h2>Публікації</h2>

		
<div class="publications-container">

    <?php
    $args = array(
        'post_type' => array('research_methodology', 'public_reports', 'sci_publications', 'press_publications'),
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();
            $post_type = get_post_type();
            $post_type_label = get_post_type_object($post_type)->labels->singular_name;
            $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/150/cccccc';
            
            $title = get_the_title();
            $excerpt = wp_trim_words(get_the_content(), 20, '...');
            $permalink = get_permalink();
    ?>

    <div class="publication-card">
        <div class="card-image" style="background: url('<?php echo $thumbnail; ?>') no-repeat; background-size: cover;">
            <p><?php echo $post_type_label; ?></p>
        </div>
        <div class="card-text">
            <h3><a href="<?php echo $permalink; ?>" style="text-decoration: none;"><?php echo $title; ?></a></h3>
            <p><?php echo $excerpt; ?></p>
        </div>
    </div>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
    ?>

    <p>Публікацій не знайдено.</p>

    <?php endif; ?>
</div>
		

		
 <?php get_footer(); ?>