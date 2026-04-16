<?php
$containerClass = $block->container()->or('container')->value();
$gutter = $block->gutter()->or('normal')->value();
$columns = $block->columns()->toStructure();
?>

<?php if ($columns->isNotEmpty()): ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
        <div class="row">
          <?php foreach ($columns as $column): ?>
            <?php
            $width = (int)$column->width()->or('12')->value();
            if ($width < 1 || $width > 12) {
              $width = 12;
            }
            ?>
            <div class="col-md-<?= $width ?>">
              <?= $column->blocks()->toBlocks() ?>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>