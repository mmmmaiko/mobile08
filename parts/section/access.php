<section class="section section--paper" id="access">
  <div class="section__inner">
    <header class="section-heading">
      <span class="section-heading__en">ACCESS</span>
      <h2 class="section-heading__jp">アクセス</h2>
    </header>

    <div class="access">
      <dl class="access__info">
        <div class="access__row">
          <dt>店名</dt>
          <dd><?= htmlspecialchars($site_name) ?></dd>
        </div>
        <div class="access__row">
          <dt>住所</dt>
          <dd><?= htmlspecialchars($address) ?></dd>
        </div>
        <div class="access__row">
          <dt>電話</dt>
          <dd><a class="access__tel" href="tel:<?= htmlspecialchars($tel_link) ?>"><?= htmlspecialchars($tel) ?></a></dd>
        </div>
        <div class="access__row">
          <dt>営業</dt>
          <dd>
            昼 <?= htmlspecialchars($hours_lunch) ?><br>
            夜 <?= htmlspecialchars($hours_dinner) ?>
          </dd>
        </div>
        <div class="access__row">
          <dt>定休</dt>
          <dd><?= htmlspecialchars($closed) ?></dd>
        </div>
        <div class="access__row">
          <dt>最寄</dt>
          <dd>地下鉄千代田線「千代田駅」B2 出口より徒歩 3 分</dd>
        </div>
      </dl>

      <div class="access__map">
        <iframe
          src="<?= htmlspecialchars($google_map_embed) ?>"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="<?= htmlspecialchars($site_name) ?>の地図"></iframe>
      </div>
    </div>
  </div>
</section>
