<?php get_header(); ?>

    <!-- Begin Flex Slider -->
    <div class="flexslider">
        <ul class="slides">
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-01.jpg" width="940" height="400" alt="Image One"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-02.jpg" width="940" height="400" alt="Image Two"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-03.jpg" width="940" height="400" alt="Image Three"></li>
        </ul>
    </div>
    <!-- End Flex Slider -->
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
            <h2>About Me:</h2>
            <?php if(have_posts()) : while(have_posts()) : the_post(); // loop one ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </section>
        <section class="widget-item">
            <h2>Latest News:</h2>
            <ul>
            <?php rewind_posts(); // stop loop one ?>
            <?php query_posts(array('category_name' => 'news', 'posts_per_page' => 4 )); // give directions to loop two ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
            <h2>Latest Articles:</h2>
            <ul>
            <?php rewind_posts(); // stop loop two ?>
            <?php query_posts(array('category_name' => 'articles', 'posts_per_page' => 4)); // give directions to loop three ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
        </section>
        <section class="widget-item">
            <h2>Contact Me:</h2>
            <p><strong>Phone: </strong>206.543.2567<br><strong>Email: </strong><a href="mailto:sinkum@uw.edu">sinkum@uw.edu</a></p>
            <p>428 Sieg Hall<br>University of Washington<br>Seattle, WA 98195</p> 
        </section>
    </div>
    <!-- End Widgets -->
    
    <small>front-page.php</small>
    
<?php get_footer(); ?>