<?php
/*
 * Template Name: Contacts
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<?php
$address = get_field('address', 'options');
$email = get_field('email', 'options');
?>

        <h2>Контакти</h2>
        <div class="contact">
            <img src="<?php echo get_template_directory_uri(); ?>/img/address.svg" alt="" />
            <?php echo esc_html($address); ?>
        </div>
        <div class="contact">
            <img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt="" />
            <a href="mailto:<?php echo esc_url($email); ?>"><?php echo $email; ?></a>
        </div>
        <div class="footer-media" style="margin-top: 40px">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon1.svg" alt="" class="footer-icon" /></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon2.png" alt="" class="footer-icon" /></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon3.svg" alt="" class="footer-icon" /></a>
        </div>

<?php get_footer(); ?>
