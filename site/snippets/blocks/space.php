<?php

// Block background

$bgVal = $block->background()->value();
$backgrounds = [
  "white" => "white",
];
if (array_key_exists($bgVal, $backgrounds)) {
  $bgAttr = $backgrounds[$bgVal];
  $blockStyle = "full-page";
} else {
  $bgAttr = "palette-default";
  $blockStyle = "";
}

// Height

$h = $block->spaceSize()->value();
if ($block->spaceSize()->value() === "custom") {
  $h = $block->customSize()->value();
}
?>

<div id="<?= $block->id() ?>"
  class="block my-0"
  style="height: <?= $h ?>"
  data-block-type="<?= $block->type() ?>"
  data-background="<?= $bgAttr ?>"></div>