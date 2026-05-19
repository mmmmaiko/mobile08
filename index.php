<?php require_once __DIR__ . '/parts/config.php'; ?>
<?php $page_title = $site_name . ' | ' . $site_description; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php require_once __DIR__ . '/parts/layout/head.php'; ?>
</head>
<body>
  <?php require_once __DIR__ . '/parts/layout/sidebar.php'; ?>
  <?php require_once __DIR__ . '/parts/layout/header.php'; ?>

  <main>
    <?php require_once __DIR__ . '/parts/section/hero.php'; ?>
    <?php require_once __DIR__ . '/parts/section/concept.php'; ?>
    <?php require_once __DIR__ . '/parts/section/interior.php'; ?>
    <?php require_once __DIR__ . '/parts/section/menu.php'; ?>
    <?php require_once __DIR__ . '/parts/section/takeout.php'; ?>
    <?php require_once __DIR__ . '/parts/section/access.php'; ?>
    <?php require_once __DIR__ . '/parts/section/cta.php'; ?>
  </main>

  <?php require_once __DIR__ . '/parts/layout/footer.php'; ?>
  <?php require_once __DIR__ . '/parts/widget/line_button.php'; ?>

  <script src="<?= asset('js/script.js') ?>" defer></script>
</body>
</html>
