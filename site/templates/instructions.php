<?php

function pageContents()
{ ?>

  <div style="max-width: 800px; margin: auto;" class="">
    <div class="space-2"></div>
    <div class="kt py-space">
      <?= page()->blocks()->toBlocks() ?>
    </div>
    <div class="space-1"></div>
  </div>

<?php }
?>

<?php if (get('partial')): ?>

  <?php snippet("header", ["noPadding" => true, "embed" => true]) ?>
  <?= pageContents() ?>
  <?php snippet("footer-partial") ?>

<?php else: ?>

  <?php snippet("header", ["noPadding" => true]) ?>
  <?= pageContents() ?>
  <?php snippet("footer") ?>

<?php endif ?>