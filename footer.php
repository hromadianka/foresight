</main>

    <footer>

        <div>         
            
        </div>

        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo" />
			<?php
            $footer_logo = get_field('logo');
            if ($footer_logo) : ?>
                <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="Логотип" class="logo" />
            <?php endif; ?>
            <!--<div class="footer-partners">
                <img src="img/partner2.png" alt="" style="height: auto" class="partner-icon" />
            </div>-->
			<?php
            $facebook = get_field('facebook');
            $instagram = get_field('instagram');
            $linkedin = get_field('linkedin');
            ?>
            <div class="footer-media">
                <a href="<?php echo esc_url($facebook); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon1.svg" alt="" class="footer-icon" /></a>
                <a href="<?php echo esc_url($instagram); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon2.png" alt="" class="footer-icon" /></a>
                <a href="<?php echo esc_url($linkedin); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-icon3.svg" alt="" class="footer-icon" /></a>
            </div>
            <a class="button" href="<?php echo esc_url(home_url('/join')); ?>">Долучитись до опитування</a>
        </div>

    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const burgerIcon = document.querySelector(".burger-icon");
            const menu = document.querySelector(".menu");

            burgerIcon.addEventListener("click", function () {
                menu.classList.toggle("active");
            });
        });
    </script>

</body>

</html>