<?php get_header(); ?>

<section>
            <h2>Про нас</h2>
			<?php
			$about_us = get_field('about_us');
			if ($about_us) {
				echo '<div>' . esc_html($about_us) . '</div>';
			}
			?>
            <a class="button" style="margin-top: 10px;" href="<?php echo esc_url(home_url('/join')); ?>">Долучитись до опитування</a>
        </section>
        <section>
            <h2>Цілі</h2>
            <ul>
			<?php
			for ($i = 1; $i <= 3; $i++) {
				$goal = get_field('goal_' . $i);
				if ($goal) {
					echo '<li>' . esc_html($goal) . '</li>';
				}
			}
			?>
            </ul>
        </section>
        <section>
			<h2>Команда</h2>
			<div class="team-container">
				<?php
				for ($i = 1; $i <= 5; $i++) {
					$team_member = get_field('team_member_' . $i);
					if ($team_member) {
						?>
						<div>
							<div class="team-member-image">
								<?php if ($team_member['photo']) : ?>
									<img src="<?php echo esc_url($team_member['photo']['url']); ?>" alt="<?php echo esc_attr($team_member['name']); ?>" />
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/default-person.jpg" alt="No Image" />
								<?php endif; ?>
							</div>
							<div class="team-member-description">
								<h3><?php echo esc_html($team_member['name']); ?></h3>
								<p><?php echo esc_html($team_member['role']); ?></p>
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</section>

        <section>
			<h2>Партнери</h2>
			<div class="partners-container">
				<?php
				for ($i = 1; $i <= 3; $i++) {
					$partner = get_field('partner_' . $i);
					if ($partner) {
						?>
						<div>
							<a href="#">
								<img src="<?php echo esc_url($partner['photo']['url']); ?>" alt="Partner <?php echo $i; ?>" />
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
		</section>

    
	<?php get_footer(); ?>