<?php
$title = $kirby->option("site.menuTitle");
?>

<div class="menu transparent">
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-12 d-flex align-items-baseline justify-content-between">
        <div class="left">
          <a class="menu-item" href="<?= $site->url() ?>"><?= $title ?></a>
        </div>
        <div class="right">
          <a class="menu-item" href="#il-prgetto">Il progetto</a>
          <a class="menu-item" href="#news">News</a>
          <a class="menu-item" href="#partners">Partners</a>
          <a class="menu-item button d-none d-sm-inline-flex" href="https://forms.office.com/e/0LLBZymF3u" target="_blank">Richiedi informazioni</a>
        </div>
      </div>
    </div>
  </div>
</div>