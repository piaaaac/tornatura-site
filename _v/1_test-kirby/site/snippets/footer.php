<?php
$ass = $kirby->url("assets") . "/images";
$title = $kirby->option("site.menuTitle");
/**
 * @param menuOptions 
 */
$menuOptions = $menuOptions ?? [];
?>

</main>

<footer>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <a href="<?= $site->url() ?>" alt="<?= $title ?>">
          <img src="<?= "$ass/logo-color-white-v2.svg" ?>" style="height: 31px; width: auto;" />
        </a>
      </div>
      <div class="col-md-6">
        <p>Per maggiorni informazioni contattaci <a href="mailto:eleonora.ocello@ifabfoundation.org" target="_blank">qui</a>.</p>
        <!-- <div><a href="https://forms.office.com/e/0LLBZymF3u" target="_blank" class="button font-bold">Richiedi informazioni</a></div> -->
        <div class="space-3"></div>
        <p class="font-sans-xs color-white-50">Tornatura è un progetto selezionato dal&nbsp;Fondo per&nbsp;la&nbsp;Repubblica&nbsp;Digitale – Impresa sociale e&nbsp;sostenuto da&nbsp;Google.org. Più&nbsp;informazioni&nbsp;<a href="https://www.fondorepubblicadigitale.it/scheda_progetto/tornatura/" class="font-sans-xs" target="_blank">qui</a>.</p>

      </div>
    </div>
  </div>
</footer>

<?php snippet("menu", $menuOptions) ?>

<?= js(['assets/js/common.js?v=' . option('assets.version')]) ?>

<?php snippet('seo/schemas'); ?>

</body>

</html>