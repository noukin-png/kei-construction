<?php get_header(); ?>
      <main class="works works-1">
        <div class="works-item-bg">
          <div class="works-contents">
            <div class="works-item-1 works-content-item">
              <div class="works-item-text">
                  <p><span>2025年 ／ 兵庫県西宮市</span></p>
                  <p>樋ノ口町雨水貯留施設整備工事</p>
              </div>

              <div class="works-swiper-area">
                <div class="works-swiper-btn-prev">＜</div>
                <div class="swiper works-swiper">
                  <div class="works-swiper-wrapper swiper-wrapper">
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item1.png" alt="画像1" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item2.png" alt="画像2" />
                    </div>
                    <div class="works-swiper-slide swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-item3.png" alt="画像3" />
                    </div>
                  </div>

                  <div class="works-pagination swiper-pagination"></div>
                </div>

                <div class="works-swiper-btn-next">＞</div>
              </div>

              <div class="works-explanation">
                <p>
                  兵庫県西宮市の樋ノ口町雨水貯留施設（下水道施設）の整備工事を実施しました。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="works-page-btn">
          <div class="return-text">
            <a href="<?php echo home_url('/works-3'); ?>">
              <p><span>前の実績紹介</span></p>
              <p>一級河川 余野川 護岸補修工事</p>
            </a>
          </div>

          <div class="next-text">
            <a href="<?php echo home_url('/works-2'); ?>">
              <p><span>次の実績紹介</span></p>
              <p>牧地区ほ場整備（7-3）工事</p>
            </a>
          </div>
        </div>

        <a href="<?php echo home_url('/works'); ?>" target="_blank" class="detail-btn">
          <button>一覧に戻る</button>
        </a>
      </main>
      <?php get_footer(); ?>