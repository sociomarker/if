<?php
$post_type_id = get_post_meta(get_the_ID(),'eltd_listing_item_type',true);

if(isset($post_type_id) && $post_type_id !== ''){
	
	$show_gallery = get_post_meta($post_type_id,'eltd_listing_type_show_sidebar_gallery',true);
	
	if($show_gallery == 'yes'){
		
		$image_gallery_val = get_post_meta(get_the_ID(), 'eltd_listing_sidebar_gallery', true );

		if($image_gallery_val !== ''){ ?>

			<div class="eltd-listing-sidebar-gallery eltd-listing-part">
					<?php
					if($image_gallery_val != '' ) {
						$image_gallery_array = explode(',',$image_gallery_val);
					}

					if(isset($image_gallery_array) && count($image_gallery_array)!= 0): ?>
						<ul class="eltd-listing-sidebar-gallery-images clearfix">
							<?php
								foreach($image_gallery_array as $gimg_id):?>

								<li>
									<?php echo wp_get_attachment_image( $gimg_id, 'search_and_go_elated_square', false, array( 'itemprop' => 'image' ) ); ?>
								</li>

							<?php endforeach;?>
						</ul>
					<?php endif; ?>
			</div>
		<?php }
	}
	
}	
