<?php
/*
  Template Name:お問い合わせ

 */

get_header();

?>

    <div class="wp-ttl-wrapper">
      <h1 class="wp-ttl page-title screen-reader-text">お問い合わせ</h1>
    </div>
    
    <div class="inner">
      <div class="bread">
      <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
       }
       ?>
      </div>
    </div>
    <main id="main primary" class="site-main">
      <div id="contact" class="contact" data-wow-delay="1s">
        <div class="inner wow fadeInLeft" data-wow-delay=".5">
          <p class="contact__txt">
            無料ご相談のお問い合わせや、質問があれば下記のフォームをご記入の上、送信ボタンを押してください。後日、メールの内容を確認し返信いたします。ご記入いただいた内容は、メールの返信以外には利用いたしません。
          </p>
          <?php echo do_shortcode('[contact-form-7 id="2121" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </main>


<?php get_footer() ?>