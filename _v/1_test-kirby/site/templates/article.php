<?php
$coverImage = null;
$coverImageUrl = "https://picsum.photos/600/400";
$coverImagePosition = "center center";
if ($page->coverImg()->isNotEmpty()) {
  $coverImage = $page->coverImg()->toFile();
  $coverImageUrl = $coverImage->url();
  $coverImagePosition = $coverImage->focus();
}
?>

<?php snippet("header", ["noPadding" => true]) ?>

<div class="article-opening">
  <div class="article-opening-image" data-role="opening-image">
    <div class="image" style="background-image: url('<?= $coverImageUrl ?>'); background-position: <?= $coverImagePosition ?>;"></div>
    <div class="pattern"></div>
  </div>
  <div class="article-opening-texts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <p class="font-mono-xs">
            <a href="<?= $page->parent()->url() ?>" class="font-mono-xs font-bold no-u">News</a>
            <span class="font-mono-xs font-bold d-inline-block mx-1">&rsaquo;</span>
            <span class="font-mono-xs font-bold"><?= $page->tags()->value() ?></span>
          </p>
          <h1><?= $page->title() ?></h1>
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

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
      <div class="space-1"></div>
      <p class="font-mono-xs font-bold">Pubblicato il <?= $page->date()->toDate('d.m.Y') ?></p>
      <div class="space-4"></div>
    </div>
  </div>
</div>

<?php snippet("footer") ?>