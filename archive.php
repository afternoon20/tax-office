<?php get_header() ?>
    <main id="main">
      <!-- メインビジュアル -->
     <div class="wp-ttl-wrapper">
      <div class="inner">
        <h1 class="wp-ttl page-title"><?php the_archive_title(); ?></h1>
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
        get_template_part( 'template-parts/content', 'archive' );
		    endwhile; // End of the loop.
		    ?>
        </ul>

          <div class="wp-pagination">
          <?php wp_pagenavi(); ?>
            <a href="" class="wp-pagination__nums wp-pagination__prev"><i class="fas fa-chevron-left"></i></a>
            <a href="" class="wp-pagination__nums wp-pagination__nums--current">1</a>
            <a href="" class="wp-pagination__nums">2</a>
            <a href="" class="wp-pagination__nums">3</a>
            <a href="" class="wp-pagination__nums">4</a>
            <a href="" class="wp-pagination__nums">5</a>
            <a href="" class="wp-pagination__nums wp-pagination__next"><i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </main>
    </div>
    </main>
<?php get_footer() ?>