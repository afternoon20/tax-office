<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>山田太郎税理士事務所</title>
    <?php wp_head(); ?>
  </head>
  <body class="drawer drawer--right">
    <!-- drawer.js -->
    <div role="banner">
      <button type="button" class="drawer-toggle drawer-hamburger">
        <spans class="sr-only">toggle navigation</spans>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
          <li><a class="drawer-brand" href="#">メニュー</a></li>
          <li><a class="drawer-menu-item" href="<?php echo ( home_url( '/' ) ); ?>">トップ</a></li>
          <li><a class="drawer-menu-item" href="<?php echo ( home_url( '/' ) )."news"; ?>">おしらせ</a></li>
          <li><a class="drawer-menu-item" href="<?php echo ( home_url( '/' ) )."about"; ?>">事務所案内</a></li>
          <li><a class="drawer-menu-item" href="<?php echo ( home_url( '/' ) )."blog"; ?>">税理士ブログ</a></li>
          <li><a class="drawer-menu-item" href="<?php echo ( home_url( '/' ) )."contact"; ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <div class="headline">
      <div class="inner">
        <span class="headline__txt">世田谷区を中心に活動する 、ベンチャー企業に特化した税理士会計事務所です。</span>
      </div>
    </div>
    <header class="header">
      <div class="inner">
        <div class="header-wrapper">
          <h1 class="header-logo">
            <a href="<?php echo ( home_url( '/' ) ); ?>" class="header-logo__link">山田太郎税理士事務所</a>
          </h1>
          <nav class="header-nav">
            <ul class="header-nav-list">
              <li class="header-nav-list__item"><a href="<?php echo ( home_url( '/' ) ); ?>" class="header-nav-list__link">トップ</a></li>
              <li class="header-nav-list__item"><a href="<?php echo ( home_url( '/' ) )."news"; ?>" class="header-nav-list__link">お知らせ</a></li>
              <li class="header-nav-list__item"><a href="<?php echo ( home_url( '/' ) )."about"; ?>" class="header-nav-list__link">事務所案内</a></li>
              <li class="header-nav-list__item"><a href="<?php echo ( home_url( '/' ) )."blog"; ?>" class="header-nav-list__link">税理士ブログ</a></li>
              <li class="header-nav-list__item"><a href="<?php echo ( home_url( '/' ) )."contact"; ?>" class="header-nav-list__link">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>