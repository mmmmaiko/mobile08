<?php require_once __DIR__ . '/parts/config.php'; ?>
<?php $page_title = 'お問い合わせ | ' . $site_name; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php require_once __DIR__ . '/parts/layout/head.php'; ?>
</head>
<body class="page-contact">
  <?php require_once __DIR__ . '/parts/layout/sidebar.php'; ?>
  <?php require_once __DIR__ . '/parts/layout/header.php'; ?>

  <main>
    <section class="subpage-hero">
      <div class="subpage-hero__inner">
        <p class="subpage-hero__en">CONTACT</p>
        <h1 class="subpage-hero__title">お問い合わせ</h1>
        <p class="subpage-hero__lead">
          ご予約・ご質問・貸切のご相談など、<br class="sp-only">
          こちらのフォームよりお気軽にお問い合わせください。
        </p>
      </div>
    </section>

    <section class="subpage-body">
      <div class="contact-intro">
        <p class="contact-intro__text">
          通常 1〜2 営業日以内にご返信いたします。<br>
          お急ぎの場合は、お電話または公式 LINE をご利用ください。
        </p>
        <div class="contact-intro__sub">
          <a class="contact-intro__tel" href="tel:<?= htmlspecialchars($tel_link) ?>">
            <span>TEL</span>
            <?= htmlspecialchars($tel) ?>
          </a>
          <a class="contact-intro__line" href="<?= htmlspecialchars($line_url) ?>" target="_blank" rel="noopener">
            公式 LINE で相談する
          </a>
        </div>
      </div>

      <div class="contact-form">
        <iframe
          src="<?= htmlspecialchars($google_form_url) ?>"
          width="100%"
          height="1200"
          frameborder="0"
          marginheight="0"
          marginwidth="0"
          title="お問い合わせフォーム">
          読み込んでいます…
        </iframe>
      </div>
    </section>
  </main>

  <?php require_once __DIR__ . '/parts/layout/footer.php'; ?>
  <?php require_once __DIR__ . '/parts/widget/line_button.php'; ?>

  <script src="<?= asset('js/script.js') ?>" defer></script>
</body>
</html>
