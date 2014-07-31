<?php get_header(); ?>
	<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8">
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class('entry'); ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<div class="content"><?php the_content(''); ?></div>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			<h2 class="text-center">Brak stron do wyświetlenia</h2>
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
<?php get_footer(); ?>