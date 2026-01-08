<?php snippet("header", ["noPadding" => true]) ?>

<?php snippet("opening") ?>

<div class="space-2"></div>
<div class="kt py-space">
  <?= $page->blocks()->toBlocks() ?>
</div>
<div class="space-1"></div>

<?php snippet("footer") ?>