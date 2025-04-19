<?php snippet("header", ["noPadding" => true]) ?>

<?php snippet("home-opening") ?>

<div class="anchor" id="il-prgetto"></div>
<?php snippet("home-section-features") ?>

<div class="anchor" id="news"></div>
<?php snippet("home-section-news") ?>

<div class="anchor" id="partners"></div>
<?php snippet("home-section-partners") ?>

<!--  
  <div class="space-4"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
        <div class="kt py-space">
          <?= $page->blocks()->toBlocks() ?>
        </div>
      </div>
    </div>
  </div>
  -->

<?php snippet("footer", ["menuOptions" => ["white" => true]]) ?>