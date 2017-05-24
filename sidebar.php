    <!-- Begin Sidebar -->
    <div id="sidebar">
    
    <!-- Begin Sub Navigation -->
    <div id="sub-navigation" class="widget">
    <h2>
	<?php 
	
	if(is_page()) { // if we are on a page...
	
		echo get_the_title($post->post_parent); // get the title of the parent page
		
	}  else {
		
		echo 'Blog';
		
	}
		
	?>
    </h2>
    <ul>
    <?php 
	
	if(is_page()) { // if we are on a page...
	
		if($post->post_parent) { // if the page has a parent...
		
			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent, )); // list the children of said parent
		
		} else { // if on the parent page...
			
			wp_list_pages(array('title_li' => '', 'child_of' => $post->ID, ));
			
		}
	
	} else { // if we are not on a page
	
	
		wp_list_categories(array('title_li' => '', )); // list the blog categories with the tile of "Blog" 
		
	
	}
	
	?>
    </ul>
    </div>
    <!-- End Sub Navigation -->
    
    <?php if(get_post_meta($post->ID, 'quote', true)) : ?>
    <!-- Begin Pull Quote -->
    <div id="pull-quote" class="widget">
    <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
    </div>
    <!-- End Pull Quote -->
    <?php endif; ?>
    
    <!-- Begin Widgets -->
    <?php dynamic_sidebar(1); ?>
    <?php dynamic_sidebar('sherrod'); ?>
    <!-- End Widgets -->
    
    </div>
    <!-- End Sidebar -->