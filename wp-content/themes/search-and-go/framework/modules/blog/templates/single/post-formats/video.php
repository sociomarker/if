<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="eltd-post-content">
		<div class="eltd-post-info eltd-top-section">
			<?php search_and_go_elated_post_info(array('category' => 'yes')) ?>
		</div>	
		
		<?php search_and_go_elated_get_module_template_part('templates/single/parts/title', 'blog'); ?>
		
		<div class="eltd-post-image">
			<?php search_and_go_elated_get_module_template_part('templates/parts/video', 'blog'); ?>
		</div>
		
		<div class="eltd-post-text">
			<div class="eltd-post-text-inner clearfix">
				<?php the_content(); ?>
			</div>
		</div>
		
	</div>

	<?php do_action('search_and_go_elated_before_blog_article_closed_tag'); ?>
	<div class="eltd-post-info">
		<?php search_and_go_elated_post_info(array(
			'share' => $social_share_flag
		)) ?>
	</div>
	
</article>