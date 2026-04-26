<?php get_header(); ?>
      <main class="contact" id="contact">
        <div class="section-title">
          <div class="text-box">
            <img class="sec-title-img pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/title.png" alt="" />
            <img
              class="sec-title-img sp"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/title-sp.png"
              alt=""
            />
            <div class="title-text">
              <h1>CONTACT</h1>
              <p>お問い合わせ</p>
            </div>
          </div>
          <img class="sec-mv-img pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-pc.png" alt="" />
          <img class="sec-mv-img sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-sp.png" alt="" />
        </div>


        <div class="contact-contents">
          <p class="thanks-text">
            お問い合わせ有り難うございます。<br/>
            下記に必要事項をご入力頂き、<br  class="sp"> 送信ボタンをクリックして下さい。
          </p>

          <div class="contact-precautions">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-pre.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-pre-sp.png" alt="">
            <div class="contact-text">
              <p>
                このお問合せにご記入いただく個人情報は「個人情報の保護に関する法律」に基づき厳重に管理し、当社からのご案内や情報の発送、個人を特定しない統計データとして活用させていただきます。
              </p>
              <p>
                お客さまの同意なしに、守秘義務を負う委託先以外の第三者に開示・提供するようなことは一切ありませんので、
                お気軽にご利用ください。
              </p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <script src="https://business.form-mailer.jp/formfiles/js/embed.js"></script>
          <div
            class="formmailer-embed"
            data-form-hash="7d83988c345142"
            data-form-host="business.form-mailer.jp"
          ></div>
        </div>
      </main>
      <?php get_footer(); ?>