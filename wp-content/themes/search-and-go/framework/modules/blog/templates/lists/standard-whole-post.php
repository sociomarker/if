<div class="eltd-blog-holder eltd-blog-type-standard <?php echo esc_attr($blog_classes)?>"   data-blog-type="<?php echo esc_attr($blog_type)?>" <?php echo esc_attr(search_and_go_elated_set_blog_holder_data_params()); ?> >
	<?php
		if($blog_query->have_posts()) : while ( $blog_query->have_posts() ) : $blog_query->the_post();
			search_and_go_elated_get_post_format_html($blog_type);
		endwhile;
		else:
			search_and_go_elated_get_module_template_part('templates/parts/no-posts', 'blog');
		endif;
	?>
	<?php
		if(search_and_go_elated_options()->getOptionValue('pagination') == 'yes') {
			search_and_go_elated_pagination($blog_query->max_num_pages, $blog_page_range, $paged);
		}
	?>
</div>
