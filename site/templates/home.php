<?php snippet("header", ["noPadding" => true]) ?>

<?php snippet("home-opening1") ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
      <div class="space-2"></div>
      <div class="kt py-space">
        <?= $page->blocks()->toBlocks() ?>
      </div>
      <div class="space-1"></div>
    </div>
  </div>
</div>


<div class="anchor" id="il-prgetto"></div>
<?php snippet("home-section-features") ?>

<div class="anchor" id="news"></div>
<?php snippet("home-section-news") ?>

<div class="anchor" id="partners"></div>
<?php snippet("home-section-partners") ?>

<?php snippet("home-section-callout") ?>


<?php snippet("footer") ?>
<?php /* snippet("footer", ["menuOptions" => ["white" => true]]) */ ?>