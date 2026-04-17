<?php snippet("header", ["noPadding" => true]) ?>

<?php snippet("home-opening3") ?>

<div class="kt py-space">
  <?= $page->blocks()->toBlocks() ?>
</div>

<div class="space-1"></div>

<?php snippet("home-section-features") ?>

<?php snippet("home-section-callout") ?>

<?php snippet("home-section-news") ?>

<?php snippet("home-section-partners") ?>


<?php snippet("footer") ?>
<?php /* snippet("footer", ["menuOptions" => ["white" => true]]) */ ?>