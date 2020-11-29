<?php get_header() ?>
    <div class="wp-ttl-wrapper">
      <div class="inner">
        <h1 class="wp-ttl page-title screen-reader-text"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="inner">
      <div class="bread">
        <a href="#" class="bread__link">トップ</a> &gt; <a href="news.html" class="bread__link">おしらせ</a> &gt;
        セミナー「持続化給付金の申請方法について」を開催します
      </div>
    </div>

<main id="main primary" class="site-main wow fadeInLeft" data-wow-delay=".5">
  <div class="inner">
    <?php  get_template_part( 'template-parts/content', 'page' );

			   
			  
		    ?>
  </div>
         
</main>



<?php get_footer() ?>