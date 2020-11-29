<?php
/*
  Template Name:事務所案内

 */

get_header();

?>

    <div class="wp-ttl-wrapper">
      <div class="inner">
        <h1 class="wp-ttl page-title screen-reader-text">事務所案内</h1>
      </div>
    </div>
    <div class="inner">
      <div class="bread"><a href="#" class="bread__link">トップ</a> &gt; 事務所案内</div>
    </div>
    <main id="main primary" class="site-main">
      <section id="overview" class="overview" data-wow-delay="1s" style="background-color: #fff">
        <div class="inner wow fadeInLeft">
          <h2 class="top-h2">事務所概要</h2>
          <table class="overview-table">
            <tbody class="overview-table__tbody">
              <tr class="overview-table__tr">
                <th class="overview-table__th">事務所名</th>
                <td class="overview-table__td">山田太郎税理士事務所</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">代表</th>
                <td class="overview-table__td">山田太郎</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">住所</th>
                <td class="overview-table__td">〒154-8504 <br class="br-sp" />東京都世田谷区世田谷23丁目87-2</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">設立日</th>
                <td class="overview-table__td">平成5年5月31日</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">電話番号</th>
                <td class="overview-table__td">0120-123-4567</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">E-mail</th>
                <td class="overview-table__td">yamadataro-tax@ytax.com</td>
              </tr>
              <tr class="overview-table__tr">
                <th class="overview-table__th">サイトURL</th>
                <td class="overview-table__td"><a href="#" class="overview-table__link">yamadataro-tax.com</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="access" data-wow-delay="1s" style="background-color: #f3f1ed">
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