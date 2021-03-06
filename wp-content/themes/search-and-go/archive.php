<?php
$blog_archive_pages_classes = search_and_go_elated_blog_archive_pages_classes( search_and_go_elated_get_default_blog_list() );
$overlapping_content        = search_and_go_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ? true : false;
get_header();
search_and_go_elated_get_title(); ?>
	<div class="<?php echo esc_attr( $blog_archive_pages_classes['holder'] ); ?>">

		<?php if ( $overlapping_content ) { ?>
		<div class="eltd-overlapping-content">
			<?php } ?>

			<?php do_action( 'search_and_go_elated_after_container_open' ); ?>
			<div class="<?php echo esc_attr( $blog_archive_pages_classes['inner'] ); ?>">
				<?php search_and_go_elated_get_blog( search_and_go_elated_get_default_blog_list() ); ?>
			</div>
			<?php do_action( 'search_and_go_elated_before_container_close' ); ?>

			<?php if ( $overlapping_content ) { ?>
		</div>
	<?php } ?>

	</div>
<?php get_footer(); ?>