<?php

/**
 * @param menuOptions 
 */
$menuOptions = $menuOptions ?? [];
?>

</main>

<footer>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-md-6">
        Tornatura
      </div>
      <div class="col-md-6">
        <p>Per maggiorni informazioni contattaci <a href="">qui</a>.</p>
        <div><a href="#" class="button">Compila il form per scaricare l’app</a></div>
        <div class="space-3"></div>
        <p>Tornatura è un progetto selezionato dal Fondo per la Repubblica Digitale – Impresa sociale e sostenuto da Google.org</p>

      </div>
    </div>
  </div>
</footer>

<?php snippet("menu") ?>

<?= js(['assets/js/common.js?v=' . option('assets.version')]) ?>

<?php snippet('seo/schemas'); ?>

</body>

</html>