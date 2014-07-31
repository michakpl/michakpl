<?php get_header(); ?>
	<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8">
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class('entry'); ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2><?php the_title(); ?></h2>
					<p class="data">dnia <span><a href="#"><?php the_time( get_option( 'date_format' ) ); ?></a></span> w kategorii <span><?php the_category('</span>, <span>'); ?></span></p>
				</header>
				<div class="content"><?php the_content(''); ?></div>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			<h2 class="text-center">Brak postów do wyświetlenia</h2>
		<?php endif; ?>
		<?php comments_template(''); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
<?php get_footer(); ?>