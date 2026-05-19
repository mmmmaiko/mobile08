<aside class="sidebar">
  <a class="sidebar__logo" href="./">
    <span class="sidebar__logo-jp"><?= htmlspecialchars($site_name) ?></span>
    <span class="sidebar__logo-en"><?= htmlspecialchars($site_name_en) ?></span>
  </a>

  <nav class="sidebar__nav" aria-label="サイドメニュー">
    <ul class="sidebar__list">
      <?php foreach ($nav_items as $item): ?>
        <li class="sidebar__item">
          <a class="sidebar__link" href="<?= $is_subpage ? 'index.php' . htmlspecialchars($item['href']) : htmlspecialchars($item['href']) ?>">
            <?= htmlspecialchars($item['label']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <div class="sidebar__info">
    <p class="sidebar__info-title">営業時間</p>
    <p class="sidebar__info-row"><span>昼</span><?= htmlspecialchars($hours_lunch) ?></p>
    <p class="sidebar__info-row"><span>夜</span><?= htmlspecialchars($hours_dinner) ?></p>
    <p class="sidebar__info-row"><span>休</span><?= htmlspecialchars($closed) ?></p>
  </div>

  <div class="sidebar__cta">
    <a class="sidebar__tel" href="tel:<?= htmlspecialchars($tel_link) ?>">
      <span class="sidebar__tel-label">ご予約・お問い合わせ</span>
      <span class="sidebar__tel-num"><?= htmlspecialchars($tel) ?></span>
    </a>
    <a class="sidebar__line" href="<?= htmlspecialchars($line_url) ?>" target="_blank" rel="noopener">公式LINE</a>
  </div>
</aside>
