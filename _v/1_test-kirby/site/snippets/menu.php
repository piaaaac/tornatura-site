<?php
$title = $kirby->option("site.menuTitle");

$white = isset($white) ? $white : false;

// $ass = $kirby->url("assets") . "/images";
// $logoWhiteUrl = "$ass/logo-color-white.svg";
// $logoBlackUrl = "$ass/logo-color-black.svg";
?>

<div class="menu transparent <?= $white ? "white" : "" ?>">
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-12 d-flex align-items-center justify-content-between">
        <div class="left">
          <a id="header-logo" class="menu-item" href="<?= $site->url() ?>" alt="<?= $title ?>"></a>
        </div>
        <div class="right">
          <a class="menu-item" href="#il-prgetto">Il progetto</a>
          <a class="menu-item" href="#news">News</a>
          <a class="menu-item" href="#partners">Partners</a>
          <a class="menu-item button d-none d-md-inline-flex" href="https://forms.office.com/e/0LLBZymF3u" target="_blank">Richiedi informazioni</a>
        </div>
      </div>
    </div>
  </div>
</div>