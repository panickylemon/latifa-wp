<?php
/**
 * Template Name: Study Page
 */

?>


<?php get_header(); ?>

<div class="wrapper-inner">

	<?php get_sidebar(); ?>


	<main class="content-panel">

		<ul class="articles-list">
		<?php
		$wp_query = new WP_Query( array(
			'category__in' => 3,
			'posts_per_page' => 5,
			'paged' => $paged
		) );
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<li>
				<article class="clearfix">

<!--					--><?php //echo get_field('course_date'); ?>
<!--					--><?php //echo get_field('course_place'); ?>
<!--					--><?php
//
//					$image = get_field('sidebar_image');
//
//					if( !empty($image) ): ?>
<!---->
<!--						<img src="--><?php //echo $image['url']; ?><!--" alt="--><?php //echo $image['alt']; ?><!--" />-->
<!---->
<!--					--><?php //endif; ?>

					<time>
						<span class="month"><?php the_time('M') ?></span>
						<span class="day"><?php the_time('d') ?></span>
					</time>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<p class="article-details">
						Запись опубликована <time><?php the_time('d.m.Y') ?></time>, в
						<span class="class text-tag"><?php the_category(', ') ?></span>
					</p>

					<?php the_content(''); ?>

					<a href="<?php the_permalink() ?>" class="comments"><?php comments_number('0', '1', '%')
						; ?></a>

					<a href="<?php the_permalink() ?>" class="button-filled">читать дальше</a>

				</article>
			</li>


		<?php endwhile; ?>
</ul>
		<?php if ($paged > 1) { ?>
		<div class="pagination">
							<ul>
								<li class="older"><?php next_posts_link('Предыдущие') ?></li>
								<li class="newer"><?php previous_posts_link('Следующие') ?></li>
							</ul>
		</div>

		<?php } else { ?>

			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('Предыдущие'); ?></div>
			</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</main>


</div>

<?php get_footer(); ?>
