<?php get_header() ?>
    <main id="main">
      <!-- メインビジュアル -->
       <?php while ( have_posts() ) : the_post(); ?>
     <div class="wp-ttl-wrapper">
      <div class="inner">
        <h1 class="wp-ttl page-title screen-reader-text"><?php the_title(); ?></h1>
      </div>
    </div>
    <!-- パンくずリスト -->
   <div class="inner">
      <div class="bread">
      <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
       }
       ?>
      </div>
    </div>
    <div class="inner">
      <main id="main primary" class="site-main wow fadeInLeft" data-wow-delay=".5">
         <?php  get_template_part( 'template-parts/content', 'single' );

			    the_post_navigation(
				  array(
					  'prev_text' => '<span class="nav-title">&lt;前の記事へ</span>',
					  'next_text' => '<span class="nav-title">次の記事へ&gt;</span>',
				  )
			  );
		    endwhile; // End of the loop.
		    ?>
      </main>
    </div>
    </main>
<?php get_footer() ?>