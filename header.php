<!doctype html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ▼TELL&MAIL&ADDRESSの自動リンク機能を制御 -->
    <meta name="format-detection" content="email=no,telephone=no,address=no" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta property="og:locale" content="ja_JP" />

    <!-- ▼SEO -->
    <link rel="”canonical”" href="”URL”" />
    <!-- ジェネレーターURL→ https://metatags.io/ -->

    <!-- ▼ファビコン -->
    <!-- ジェネレーターURL→ https://realfavicongenerator.net/ -->

    <!-- ▼クロールして欲しくない -->
    <!-- <meta name="robots" content="noindex,nofollow"> -->

    <!-- ▼テーマカラー -->
    <!-- <meta name="theme-color" content="#e9c931"> -->

    <!-- ▼swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- ▼CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css?ver=1.0.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css?ver=1.0.0" />

    <!-- ▼フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
     <div id="loading">
      <div class="loading-half loading-left">
        <img class="loading-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/loading_pc.png" alt="" />
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-logo.png" alt="" />
      </div>
      <div class="loading-half loading-right">
        <img class="loading-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/loading_pc.png" alt="" />
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-logo.png" alt="" />
      </div>
    </div>
    <header class="header">
      <div class="pc-header pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo-pc.png" class="pc" alt="" />
        <div class="pc">
          <div class="header-nav">
            <nav>
              <ul>
                <li>
                  <a href="<?php echo home_url('/'); ?>" target="_blank">ホーム</a>
                </li>

                <li>
                  <a href="<?php echo home_url('/ページ名'); ?>" target="_blank">会社概要</a>
                </li>

                <li>
                  <a href="<?php echo home_url('/ページ名'); ?>" target="_blank">事業内容</a>
                </li>

                <li>
                  <a href="<?php echo home_url('/works'); ?>" target="_blank">実績紹介</a>
                </li>

                <li>
                  <a href="<?php echo home_url('/ページ名'); ?>" target="_blank">採用情報</a>
                </li>
              </ul>

              <a href="<?php echo home_url('/contact'); ?>" target="_blank" class="detail-btn pc"
                ><button>お問い合わせ</button></a
              >
            </nav>
          </div>
        </div>
      </div>

      <div class="sp-header sp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo-pc.png" class="sp" alt="" />
        <div class="humburger-menu">
          <div class="humburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>

      <div class="sp-header-nav sp">
        <nav>
          <ul>
            <li><a href="<?php echo home_url('/front-page'); ?>" target="_blank">ホーム</a></li>
            <li><a href="<?php echo home_url('/ページ名'); ?>" target="_blank">会社概要</a></li>
            <li><a href="<?php echo home_url('/ページ名'); ?>" target="_blank">事業案内</a></li>
            <li><a href="<?php echo home_url('/works'); ?>" target="_blank">実績紹介</a></li>
            <li><a href="<?php echo home_url('/ページ名'); ?>" target="_blank">採用情報</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>" target="_blank">お問い合わせ</a></li>
          </ul>
        </nav>

        <div class="company-tel">
          <div class="tel-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.png" alt="">
            <a href="<?php echo home_url('/tel:06-6151-4256'); ?>">06-6151-4256</a>
          </div>

          <p>【受付時間】平日 10:00〜18:00</p>
        </div>

        <div class="header-logo-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo-sp.png" alt="">
        </div>

        <div class="header-text">
          <p>〒560-0056 大阪府豊中市宮山町2丁目9-2</p>
          <p>TEL：06-6151-4256／FAX：06-6151-4257</p>
        </div>

        <p class="copyright">
          ©︎KEI,CONSTRUCTION
        </p>
      </div>
    </header>