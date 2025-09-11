<?php snippet("header") ?>

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

<?php snippet("footer") ?>