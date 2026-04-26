<?php get_header(); ?>
      <main class="works works-3">
        <div class="works-item-bg">
          <div class="works-contents">
            <div class="works-item-1 works-content-item">
              <div class="works-item-text">
                <p><span>2023年 ／ 大阪府豊能町</span></p>
                <p>一級河川 余野川 護岸補修工事</p>
              </div>

              <div class="works-swiper-area">
                <div class="works-swiper-btn-prev">＜</div>
                <div class="swiper works-swiper">
                  <div class="works-swiper-wrapper swiper-wrapper">
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item8.png" alt="画像1" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item9.png" alt="画像2" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item10.png" alt="画像3" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item11.png" alt="画像3" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item12.png" alt="画像3" />
                    </div>
                  </div>

                  <div class="works-pagination swiper-pagination"></div>
                </div>

                <div class="works-swiper-btn-next">＞</div>
              </div>

              <div class="works-explanation">
                <p>一級河川 余野川 護岸補修工事（R5 金石橋下流左岸）</p>
                <p>大阪府池田土木事務所　法覆護岸工</p>
              </div>
            </div>
          </div>
        </div>

        <div class="works-page-btn">
          <div class="return-text">
            <a href="<?php echo home_url('/works-2'); ?>">
              <p><span>前の実績紹介</span></p>
              <p>牧地区ほ場整備（7-3）工事</p>
            </a>
          </div>

          <div class="next-text">
            <a href="<?php echo home_url('/works-1'); ?>">
              <p><span>次の実績紹介</span></p>
              <p>樋ノ口町雨水貯留施設整備工事</p>
            </a>
          </div>
        </div>

        <a href="<?php echo home_url('/works'); ?>" target="_blank" class="detail-btn">
          <button>一覧に戻る</button>
        </a>
      </main>
      <?php get_footer(); ?>