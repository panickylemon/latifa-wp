<?php get_header(); ?>

	<main class="content-panel">
		<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</main>
<?php get_footer(); ?>