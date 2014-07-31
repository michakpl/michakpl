<div class="sidebar col-sm-12 col-sm-offset-0 col-md-3 col-md-offset-1">
	<div class="widget">
		<h3>Kategorie:</h3>
		<div>
			<nav class="categories nav nav-pills nav-stacked">
				<?php wp_list_categories(array(
					'title_li' => '',
					'parent' => 0
				)); ?>
			</nav>
		</div>
	</div>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar( 'right-sidebar' )) : ?>

	<?php endif; ?>
</div>
