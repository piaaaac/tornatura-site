<?php
$subpages = $page->children()->listed();
$has = $subpages->count() > 0;
?>
<div id="<?= $block->id() ?>" class="block" data-block-type="<?= $block->type() ?>" data-block-style="full-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php if ($has): ?>
          <div class="subpages">
            <?php foreach ($subpages as $subpage): ?>
              <span class="font-sans-m">&rarr;</span>
              <a class="font-sans-m font-bold" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
            <?php endforeach ?>
          </div>
        <?php else: ?>
          <div class="font-sans-xl mt-3"><?= $block->textOnEmpty()->value() ?></div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>