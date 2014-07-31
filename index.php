<?php get_header(); ?>
	<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8">
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class('entry'); ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="data">dnia <span><a href="<?php the_permalink(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span> w kategorii <span><?php the_category('</span>, <span>'); ?></span></p>
				</header>
				<div class="content"><?php the_content(''); ?></div>
				<footer>
					<?php if(comments_open() && !post_password_required()) : ?>
						<p class="comments pull-left"><?php comments_popup_link( 'brak komentarzy', '1 komentarz', '% komentarzy' ); ?></p>
					<?php endif; ?>
					<p class="readMore pull-right col-xs-6 col-md-3"><span><a class="pull-right" href="<?php the_permalink(); ?>">Czytaj więcej</a></span></p>
				</footer>
			</article>
		<?php endwhile; ?>
			<ul class="pager">
				<li><?php next_posts_link( '&laquo; Starsze' ); ?></li>
				<li><?php previous_posts_link( 'Nowsze &raquo;' ); ?></li>
			</ul>
		<?php else : ?>
			<h2 class="text-center">Brak postów do wyświetlenia</h2>
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
<?php get_footer(); ?>