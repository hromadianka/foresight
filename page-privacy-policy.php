<?php
/*
 * Template Name: Privacy Policy
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

		<?php
		$privacy_policy = get_field('privacy_policy');
		?>

        <h2 style="text-align: left;">Політика приватності</h2>
        <?php echo esc_html($privacy_policy); ?>
 
 
 <?php get_footer(); ?>