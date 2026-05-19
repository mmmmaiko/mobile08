<header class="mobile-header">
  <a class="mobile-header__logo" href="./">
    <span class="mobile-header__logo-jp"><?= htmlspecialchars($site_name) ?></span>
    <span class="mobile-header__logo-en"><?= htmlspecialchars($site_name_en) ?></span>
  </a>
  <button type="button" id="btnHamburger" class="btn-hamburger" aria-label="メニューを開く" aria-controls="drawer" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
</header>

<nav id="drawer" class="drawer" aria-hidden="true">
  <div class="drawer__inner">
    <a class="drawer__logo" href="./">
      <span class="drawer__logo-jp"><?= htmlspecialchars($site_name) ?></span>
      <span class="drawer__logo-en"><?= htmlspecialchars($site_name_en) ?></span>
    </a>
    <ul class="drawer__list">
      <?php foreach ($nav_items as $item): ?>
        <li class="drawer__item">
          <a class="drawer__link" href="<?= $is_subpage ? 'index.php' . htmlspecialchars($item['href']) : htmlspecialchars($item['href']) ?>">
            <?= htmlspecialchars($item['label']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="drawer__cta">
      <a class="drawer__tel" href="tel:<?= htmlspecialchars($tel_link) ?>">
        <span class="drawer__tel-label">ご予約・お問い合わせ</span>
        <span class="drawer__tel-num"><?= htmlspecialchars($tel) ?></span>
      </a>
      <a class="drawer__line" href="<?= htmlspecialchars($line_url) ?>" target="_blank" rel="noopener">
        LINEで予約・相談
      </a>
    </div>
  </div>
</nav>
<div id="drawerOverlay" class="drawer-overlay" aria-hidden="true"></div>
