<?php
$coverImage = null;
$coverImageUrl = "https://placehold.co/600x400/F0F0F0/F0F0F0";
$coverImagePosition = "center center";
if ($page->coverImg()->isNotEmpty()) {
  $coverImage = $page->coverImg()->toFile();
  $coverImageUrl = $coverImage->url();
  $coverImagePosition = $coverImage->focus();
}
?>

<?php snippet("header") ?>

<div class="project-opening">
  <div class="project-opening-image" style="background-image: url('<?= $coverImageUrl ?>'); background-position: <?= $coverImagePosition ?>;"></div>
  <div class="project-opening-texts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-9">
          <h1><?= $page->title() ?></h1>
          <!-- <p><?= $page->title() ?></p> -->
        </div>
        <div class="col-12 col-md-3 text-md-right mt-3 mt-md-0">
          <span><?= $page->tags()->value() ?></span>
          <br />
          <span><?= $page->year()->value() ?></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
      <div class="space-4"></div>
      <div class="kt py-space">
        <!-- <?= $page->text()->kti() ?> -->
        <?= $page->blocks()->toBlocks() ?>
      </div>
    </div>
  </div>
</div>

<?php snippet("footer") ?>