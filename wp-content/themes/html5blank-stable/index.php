<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

	<div class="menu_container">
		<div class="menu_background"></div>

		<div class="sidebar-menu">
			<div>
				<button class="close-menu" data-ember-action="758">
					Close the menu
				</button>

				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->

				<?php get_sidebar(); ?>

			</div>
		</div>

	</div>


<?php get_footer(); ?>
