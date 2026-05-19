<?php
// ─── サイト全体の設定 ───
$site_name        = '和食処 葉月';
$site_name_en     = 'WASHOKU HAZUKI';
$site_description = '季節の素材をいかした、心ほどける和食定食のお店。';
$tel              = '03-1234-5678';
$tel_link         = '0312345678';
$address          = '〒100-0001 東京都千代田区千代田1-2-3 葉月ビル1F';
$hours_lunch      = '11:30 – 14:30（L.O. 14:00）';
$hours_dinner     = '17:30 – 22:00（L.O. 21:00）';
$closed           = '月曜・第3火曜';
$line_url         = 'https://line.me/R/ti/p/@hazuki-sample';
$google_form_url  = 'https://docs.google.com/forms/d/e/1FAIpQLScSAMPLEFORMID/viewform?embedded=true';
$google_map_embed = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7!2d139.7670!3d35.6814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQwJzUzLjAiTiAxMznCsDQ2JzAxLjMiRQ!5e0!3m2!1sja!2sjp!4v1700000000000';

// ─── ナビゲーション ───
$nav_items = [
  ['label' => 'コンセプト',     'href' => '#concept'],
  ['label' => '店内紹介',       'href' => '#interior'],
  ['label' => 'お品書き',       'href' => '#menu'],
  ['label' => 'テイクアウト',   'href' => '#takeout'],
  ['label' => 'アクセス',       'href' => '#access'],
  ['label' => 'お問い合わせ',   'href' => '#cta'],
];

// ─── 現在ページのファイル名（subpage 判定用） ───
$current_file = basename($_SERVER['PHP_SELF'] ?? '');
$is_subpage   = $current_file !== 'index.php' && $current_file !== '';

// ─── キャッシュバスティング ───
function asset($path) {
  $abs = __DIR__ . '/../' . ltrim($path, '/');
  $v   = file_exists($abs) ? filemtime($abs) : time();
  return htmlspecialchars($path) . '?v=' . $v;
}
