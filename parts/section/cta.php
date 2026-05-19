<section class="section section--ink" id="cta">
  <div class="section__inner">
    <header class="section-heading">
      <span class="section-heading__en">CONTACT</span>
      <h2 class="section-heading__jp">ご予約・お問い合わせ</h2>
    </header>

    <p class="cta__lead">
      ご予約・ご質問は、お電話または下記フォームよりお気軽にお問い合わせください。<br>
      公式 LINE からもメッセージを承っています。
    </p>

    <div class="cta__phone">
      <span class="cta__phone-label">お電話でのご予約</span>
      <a class="cta__phone-num" href="tel:<?= htmlspecialchars($tel_link) ?>"><?= htmlspecialchars($tel) ?></a>
      <span class="cta__phone-hours">受付：11:00 – 21:00</span>
    </div>

    <div class="cta__btns">
      <a class="btn btn--primary" href="./contact.php">
        お問い合わせフォーム<span class="btn__arrow"></span>
      </a>
      <a class="btn btn--line" href="<?= htmlspecialchars($line_url) ?>" target="_blank" rel="noopener">
        公式 LINE で相談する
      </a>
    </div>
  </div>
</section>
