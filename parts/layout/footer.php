<footer class="footer">
  <div class="footer__inner">
    <p class="footer__logo">
      <span class="footer__logo-jp"><?= htmlspecialchars($site_name) ?></span>
      <span class="footer__logo-en"><?= htmlspecialchars($site_name_en) ?></span>
    </p>
    <address class="footer__address"><?= htmlspecialchars($address) ?></address>
    <p class="footer__tel">TEL <a href="tel:<?= htmlspecialchars($tel_link) ?>"><?= htmlspecialchars($tel) ?></a></p>

    <ul class="footer__nav">
      <?php foreach ($nav_items as $item): ?>
        <li>
          <a href="<?= $is_subpage ? 'index.php' . htmlspecialchars($item['href']) : htmlspecialchars($item['href']) ?>">
            <?= htmlspecialchars($item['label']) ?>
          </a>
        </li>
      <?php endforeach; ?>
      <li><a href="./contact.php">お問い合わせフォーム</a></li>
    </ul>

    <p class="footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($site_name) ?></p>
  </div>
</footer>
