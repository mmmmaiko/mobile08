// ─── ドロワーメニュー ───
const btnHamburger  = document.getElementById('btnHamburger');
const drawer        = document.getElementById('drawer');
const drawerOverlay = document.getElementById('drawerOverlay');
const body          = document.body;

const openMenu = () => {
  body.classList.add('menu-open');
  btnHamburger.setAttribute('aria-expanded', 'true');
  drawer.setAttribute('aria-hidden', 'false');
  drawerOverlay.setAttribute('aria-hidden', 'false');
};

const closeMenu = () => {
  body.classList.remove('menu-open');
  btnHamburger.setAttribute('aria-expanded', 'false');
  drawer.setAttribute('aria-hidden', 'true');
  drawerOverlay.setAttribute('aria-hidden', 'true');
};

if (btnHamburger) {
  btnHamburger.addEventListener('click', () => {
    body.classList.contains('menu-open') ? closeMenu() : openMenu();
  });
}

if (drawerOverlay) {
  drawerOverlay.addEventListener('click', closeMenu);
}

// ドロワー内リンクを押したら閉じる
document.querySelectorAll('.drawer__link').forEach((link) => {
  link.addEventListener('click', closeMenu);
});

// Esc キーで閉じる
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && body.classList.contains('menu-open')) closeMenu();
});

// ─── スクロール時にヘッダー & LINE FAB のクラス切替 ───
const onScroll = () => {
  if (window.scrollY > 80) {
    body.classList.add('is-scrolled');
  } else {
    body.classList.remove('is-scrolled');
  }
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// ─── アンカーリンクで PC ヘッダー高さ分オフセット（必要なら） ───
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', (e) => {
    const href = anchor.getAttribute('href');
    if (!href || href === '#') return;
    const target = document.querySelector(href);
    if (!target) return;
    e.preventDefault();
    const headerH = window.innerWidth < 1024 ? 60 : 0;
    const top = target.getBoundingClientRect().top + window.scrollY - headerH;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});
