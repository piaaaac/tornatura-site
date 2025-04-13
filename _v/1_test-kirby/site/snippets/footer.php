<?php

/**
 * @param menuOptions 
 */
$menuOptions = $menuOptions ?? [];
?>

</main>

<footer>
  <div class="space-3"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 d-md-flex justify-content-between align-items-baseline">
        <div class="left">
          <p>Footer link</p>
        </div>
        <div class="right">
          <p>Footer 2</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php snippet("menu") ?>

<?= js(['assets/js/common.js?v=' . option('assets.version')]) ?>

<?php snippet('seo/schemas'); ?>

</body>

</html>