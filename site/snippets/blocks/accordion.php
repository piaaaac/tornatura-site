<?php
$fieldId = "block-acc-" . pseudoRandomBytes();
?>

<div class="block container-fluid accordion" id="<?= $fieldId ?>" data-initialized="false">
  <div class="row">
    <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">

      <?php foreach ($block->items()->toStructure() as $item) : ?>
        <div class="accordion-item">
          <div class="accordion-header">
            <div class="accordion-title">
              <?= $item->itemHeader()->kt() ?>
            </div>
            <button class="accordion-arrow"></button>
          </div>
          <div class="accordion-content">
            <div class="accordion-body">
              <?= $item->itemContent()->kt() ?>
            </div>
          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</div>

<script>
  // Initialize accordion when DOM is loaded
  document.addEventListener("DOMContentLoaded", () => {
    // var fieldId = "<?= $fieldId ?>";
    // const accordionElement = document.getElementById(fieldId);
    // const acc = new Accordion(accordionElement);
    // console.log(acc);
    initNewAccordions();
  });
</script>