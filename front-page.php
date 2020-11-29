<?php 

/*
  Template Name:フロントページ

 */


get_header() ?>
    <main id="main">
      <!-- メインビジュアル -->
      <div id="mv" class="mv">
        <!-- カルーセル -->
        <div id="mv-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#mv-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#mv-carousel" data-slide-to="1"></li>
            <li data-target="#mv-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-contents">
              <div class="inner inner--carousel">
                <div class="carousel-wrapper">
                  <h2 class="carousel__ttl">お客様の第一の理解者<br class="br-sp" />としてサポートしたい</h2>
                  <p class="carousel__txt">〜無料相談受け付けております〜</p>
                  <a href="" class="btn carousel__btn">お問い合わせ</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item--01 active">
              <!-- <img src="<?php bloginfo('template_directory'); ?>/img/dist/mv01.jpg" class="d-block w-100" alt="..." /> -->
            </div>
            <div class="carousel-item carousel-item--02">
              <!-- <img src="<?php bloginfo('template_directory'); ?>/img/dist/key_visual2.jpg" class="d-block w-100" alt="..." /> -->
            </div>
            <div class="carousel-item carousel-item--03">
              <!-- <img src="<?php bloginfo('template_directory'); ?>/img/dist/key_visual3.jpg" class="d-block w-100" alt="..." /> -->
            </div>
          </div>
        </div>
      </div>
      <section id="service" class="service" 　data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">サービス内容</h2>
          <ul class="service-list">
            <li class="service-list__item">
              <div class="service-list__img service-list__img--01"></div>
              <h3 class="service-list__ttl">税務顧問・税務申告</h3>
              <p class="service-list__txt">ベンチャー企業を中心に、税務顧問業務、税務申告業務のみならず、税務上最も望ましいスキームの確立をサポートします。</p>
            </li>
            <li class="service-list__item">
              <div class="service-list__img service-list__img--03"></div>
              <h3 class="service-list__ttl">会計アウトソーシング</h3>
              <p class="service-list__txt">
                記帳代行や振込業務、月次報告書の作成等の経理部門のサポートをいたします。財務会計システムの導入支援も行っております。
              </p>
            </li>
            <li class="service-list__item">
              <div class="service-list__img service-list__img--02"></div>
              <h3 class="service-list__ttl">給与計算・社会保険業務</h3>
              <p class="service-list__txt">給与計算や各種社会保険業務を、社会保険労務士と連携しながらサポートいたします。法定調書の作成も対応可能です。</p>
            </li>
          </ul>
        </div>
      </section>
      <section id="steatment" class="steatment" data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">代表挨拶</h2>
          <div class="steatment-wrapper">
            <div class="steatment__left">
              <img src="<?php bloginfo('template_directory'); ?>/img/dist/person01.png" alt="代表　山田太郎の写真" class="steatment__img" />
            </div>
            <div class="steatment__right">
              <em class="steatment__speach">お客様の第一の理解者として<br class="br-sp" />サポートしたい</em>
              <p class="steatment__txt">山田太郎税理士事務所は、ベンチャー企業の経営サポートに特化した税理士事務所です。</p>
              <p class="steatment__txt">
                私は、大学在学中に税理士資格を取得しました。卒業後は大手税理士法人に5年間勤務し、ベンチャー企業の経営サポートに従事してきました。その後退職し、地元である世田谷区にて開業しました。
              </p>
              <p class="steatment__txt">
                現在では、地域の中小企業や個人事業主を中心に数多くのお客様のサポートをしてきました。また、定期的に無料セミナーを開催しておりますので、是非ご参加ください。
              </p>
              <p class="steatment__txt steatment__txt--rep">-代表　山田太郎-</p>
            </div>
          </div>
        </div>
      </section>
      <section id="customer" class="customer" data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2 customer__ttl">お客様へ</h2>
          <p class="customer__txt">このようなお悩みがあれば<br class="br-sp" />是非ご相談ください！</p>
          <ul class="customer-list">
            <li class="customer-list__item"><i class="customer-list__icon fas fa-check-circle"></i>地元で会社設立を考えている。</li>
            <li class="customer-list__item"><i class="customer-list__icon fas fa-check-circle"></i>ベンチャー企業に詳しい税理士を探している。</li>
            <li class="customer-list__item"><i class="customer-list__icon fas fa-check-circle"></i>会社設立・企業の費用や融資について知りたい。</li>
            <li class="customer-list__item"><i class="customer-list__icon fas fa-check-circle"></i>個人事業から法人化のメリットを知りたい。</li>
          </ul>
          <div class="customer__arrow"></div>
          <a href="<?php echo ( home_url( '/' ) )."contact"; ?>" class="btn">お問い合わせ</a>
        </div>
      </section>
      <section id="post" class="post" data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">ニュース</h2>
          <div class="tab-area">
            <div class="tab tab--active">お知らせ</div>
            <div class="tab">税理士ブログ</div>
          </div>
          <div class="contents-area">
            <div class="contents contents--show">
              <ul class="post-list">
              <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'news',
                    'posts_per_page' => 5,
                     ));
                if($the_query->have_posts()):
              ?>
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <li class="post-list__item">
                  <span class="post-list__date"><i class="far fa-clock"></i><?php echo get_the_date(); ?></span>
                  <span class="post-list__cat"><a href="<?php echo ( home_url( '/' ) )."news"; ?>" class="post-list__cat-link">お知らせ</a></span>
                  <span class="post-list__ttl"><a href="<?php the_permalink(); ?>" class="post-list__link"><?php echo get_the_title(); ?></a></span>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else: ?>
              <!-- 投稿が無い場合の処理 -->
              <?php endif; ?>
              </ul>
              <div class="post-wrapper">
                <a href="<?php echo ( home_url( '/' ) )."news"; ?>" class="post__btn">もっと見る</a>
              </div>
            </div>
            <div class="contents">
              <ul class="post-list">
               <?php
                $the_query = new WP_Query( array(
                    'posts_per_page' => 5,
                     ));
                if($the_query->have_posts()):
              ?>
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <?php get_template_part( 'template-parts/content', 'blog' ); ?>
                 <?php endwhile; ?>
              <?php else: ?>
	             <h2>記事がありません</h2>
              <?php endif; ?>
              </ul>
              <div class="post-wrapper">
                <a href="<?php echo ( home_url( '/' ) )."blog"; ?>" class="post__btn">もっと見る</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="question" data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">よくある質問</h2>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">初回の相談は料金がかかりますか？</h3>
            </div>
            <p class="accordion__bottom">いいえ、かかりません。お気軽にご相談ください。</p>
          </div>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">月次顧問料はいくらですか。</h3>
            </div>
            <p class="accordion__bottom">お客様の企業の規模によります。詳細は、無料ご相談の際にご確認させていただきます。</p>
          </div>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">どのような業種を扱っていますか？</h3>
            </div>
            <p class="accordion__bottom">
              主な顧問先は、製造業、IT業界、飲食業、人材派遣であります。その他の業種につきましても、経験豊富なスタッフも揃えておりますので、満足いただけるサービスをご提供することができます。
            </p>
          </div>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">会計ソフトを導入したいのですがどうすればよろしいですか。</h3>
            </div>
            <p class="accordion__bottom">当事務所では、弥生会計、勘定奉行を使っておりますのでどちらかを選択していただくことになります。</p>
          </div>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">担当地域はどこですか。</h3>
            </div>
            <p class="accordion__bottom">
              主な顧問先は世田谷区ですが、メールやビデオ会議が可能でしたら全国どこまでも対応しております。お気軽にご連絡ください。
            </p>
          </div>
          <div class="accordion">
            <div class="accordion__top">
              <i class="far fa-question-circle accordion__ttl--icon"></i>
              <h3 class="accordion__ttl">税務申告書の作成のみお願いしたいのですが可能でしょうか。</h3>
            </div>
            <p class="accordion__bottom">はい、可能でございます。当事務所では、税務申告書作成のみ、帳簿作成のみといったご依頼も柔軟に対応しおります。</p>
          </div>
        </div>
      </section>
      <section class="access" data-wow-delay="1s">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">アクセス</h2>

          <div class="access-list">
            <div class="access-list__item">
              <table class="access-table">
                <tbody class="access-table__tbody">
                  <tr class="access-table__tr">
                    <th class="access-table__th">住所</th>
                    <td class="access-table__td">〒154-8504 <br class="br-sp" />東京都世田谷区世田谷23丁目87-2</td>
                  </tr>
                  <tr class="access-table__tr">
                    <th class="access-table__th">代表</th>
                    <td class="access-table__td">山田太郎</td>
                  </tr>
                  <tr class="access-table__tr">
                    <th class="access-table__th">最寄り駅</th>
                    <td class="access-table__td">東急世田谷線「世田谷駅」より徒歩10分</td>
                  </tr>
                  <tr class="access-table__tr">
                    <th class="access-table__th">電話番号</th>
                    <td class="access-table__td">0120-123-4567</td>
                  </tr>
                  <tr class="access-table__tr">
                    <th class="access-table__th">E-mail</th>
                    <td class="access-table__td">yamadataro-tax@ytax.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="access-list__item">
              <iframe
                class="access-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51882.346250717404!2d139.5994477178957!3d35.63643678226842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f49e698a94db%3A0xb1914a86c048470a!2z5LiW55Sw6LC35Yy65b255omA!5e0!3m2!1sja!2sjp!4v1604820838659!5m2!1sja!2sjp"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer() ?>