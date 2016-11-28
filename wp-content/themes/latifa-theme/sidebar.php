<aside>

	<form action="blog/" class="form-search clearfix">

		<label>
			<input name="s" type="text" placeholder="Поиск...">
		</label>

		<button type="submit"></button>

	</form>

	<form action="blog/" method="post" class="form-mailing">

		<p class="title">Подпишитесь на рассылку,<br> это бесплатно</p>

		<p class="sub-title">Больше полезных статей еще впереди</p>

		<label>
			<input type="email" name="email" placeholder="Ваш e-mail">
		</label>

		<button type="submit" class="button-filled">Подписаться!</button>

	</form>

	<div class="about-me">

		<div class="title-block"><span>ОБО МНЕ</span></div>

		<img src="<?php bloginfo('template_url'); ?>/images/photo-author.png" alt="me">

		<p>Что они хотят знать обо мне?</p>

		<p>Что я соблюдающая мусульманка –<br> это очень важно. </p>

		<a href="#">Читать больше</a>

	</div>

	<div class="soon">

		<div class="title-block"><span>скоро</span></div>

		<ul>
			<?php
			$n_query = new WP_Query( array(
					'category__in' => 3,
					'posts_per_page' => 5,
					'paged' => $paged
			) );
			while ($n_query->have_posts()) : $n_query->the_post(); ?>
<!--				--><?php //the_content(''); ?>
							<li class="clearfix">
								<div class="image-wrap">
									<img src="<?php bloginfo('template_url'); ?>/images/soon-1.png" alt="soon">
								</div>
								<div class="event-info">
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<time><?php the_time('d.m.Y') ?></time>
								</div>
							</li>
			<?php endwhile; ?>
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-1.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Тренинг «Как создать и раскрутить собственный сайт»</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->
<!---->
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-2.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Как стать дорогим копирайтером</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->
<!---->
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-3.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Блог: создать и раскрутить</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->
<!---->
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-4.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Женственность мусульманки</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->
<!---->
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-5.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Инфобизнес: создать и раскрутить</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->
<!---->
<!--			<li class="clearfix">-->
<!--				<div class="image-wrap">-->
<!--					<img src="--><?php //bloginfo('template_url'); ?><!--/images/soon-6.png" alt="soon">-->
<!--				</div>-->
<!--				<div class="event-info">-->
<!--					<h3><a href="#">Инстаграм: с нуля до результата</a></h3>-->
<!--					<time>Дата</time>-->
<!--				</div>-->
<!--			</li>-->

		</ul>

	</div>

</aside>