            <li class="post-list__item">
              <span class="post-list__date"><i class="far fa-clock"></i><?php  the_time('Y.m.d') ?></span>
              <span class="post-list__cat">
              <?php
                $category = get_the_category();
                if ($category[0]) {
                    echo '<a class="post-list__cat-link" href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                }
              ?>
              </span>
              <span class="post-list__ttl"><a href="<?php echo get_permalink() ?>" class="post-list__link"><?php the_title(); ?></a></span>
            </li>
          