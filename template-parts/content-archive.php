            <li class="post-list__item">
              <span class="post-list__date"><i class="far fa-clock"></i><?php  the_time('Y.m.d') ?></span>
              <span class="post-list__cat"><a href="" class="post-list__cat-link"><?php the_archive_title(); ?></a></span>
              <span class="post-list__ttl"><a href="<?php echo get_permalink() ?>" class="post-list__link"><?php the_title(); ?></a></span>
            </li>
          