<?php get_header() ?>
    <main id="main">
      <!-- メインビジュアル -->
      
     <div class="wp-ttl-wrapper">
      <div class="inner">
        <h1 class="wp-ttl page-title">税理士ブログ</h1>
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
       <main id="main primary" class="site-main">
      <div id="post" class="post" data-wow-delay="1s">
        <div class="inner wow fadeInLeft" data-wow-delay=".5">
          <ul class="post-list">
        <?php   
        while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'blog' );
		    endwhile; // End of the loop.
		    ?>
        </ul>
        <?php wp_pagenavi(); ?>
        </div>
      </div>
    </main>
    </div>
    </main>
<?php get_footer() ?>    <main id="main">
