        <article class="post">
          <div class="post-header">
            <time class="post__date"><i class="far fa-clock"></i><?php  the_time('Y.m.d') ?></time>
            <span class="post__cat"><i class="far fa-folder"></i><a href="#" class="post__link"><?php the_category(', ') ?></a></span>
          </div>
          <?php if ( has_post_thumbnail() ) { // check for feature image ?> 
            <img src="img/dist/mv01.jpg" alt="" class="post__img" />
		        <?php the_post_thumbnail('full', array('class' => 'post__img')); ?>
            <?php } ?>

            <div class="post-body">
	          	<?php the_content(); ?>
          	</div><!-- post-body -->
        </article>