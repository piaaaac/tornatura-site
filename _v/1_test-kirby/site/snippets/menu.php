<?php
$title = $kirby->option("site.menuTitle");
?>

<div class="menu transparent">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 d-flex align-items-baseline justify-content-between">
        <div class="left">
          <a class="menu-item" href="<?= $site->url() ?>"><?= $title ?></a>
        </div>
        <div class="right">
          <a class="menu-item" href="<?= $site->url() ?>">Index</a>
          <a class="menu-item" href="<?= "" ?>">Info</a>
          <a class="menu-item" href="<?= "" ?>">Info</a>
          <a class="menu-item" href="<?= "" ?>">Info</a>
        </div>
      </div>
    </div>
  </div>
</div>