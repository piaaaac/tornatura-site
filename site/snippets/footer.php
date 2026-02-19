<?php
$ass = $kirby->url("assets") . "/images";
$title = $kirby->option("site.menuTitle");
/**
 * @param menuOptions 
 */
$menuOptions = $menuOptions ?? [];
?>

</main>

<?php snippet("newsletter") ?>

<footer>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0 d-flex flex-column justify-content-between align-items-start">
        <a href="<?= $site->url() ?>" alt="<?= $title ?>">
          <img src="<?= "$ass/logo-color-white.svg" ?>" style="height: 31px; width: auto;" />
        </a>

      </div>
      <div class="col-md-6">
        <p>Per maggiori informazioni contattaci <a href="mailto:tornatura.ai@ifabfoundation.org" target="_blank">qui</a>.</p>
        <!-- <div><a href="https://forms.office.com/e/0LLBZymF3u" target="_blank" class="button font-bold">Richiedi informazioni</a></div> -->
        <div class="space-3"></div>

        <!-- v1 -->
        <!-- <p class="font-sans-xs color-white-50">Tornatura è un progetto selezionato dal&nbsp;Fondo per&nbsp;la&nbsp;Repubblica&nbsp;Digitale – Impresa sociale e&nbsp;sostenuto da&nbsp;Google.org. Più&nbsp;informazioni&nbsp;<a href="https://www.fondorepubblicadigitale.it/scheda_progetto/tornatura/" class="font-sans-xs" target="_blank">qui</a>.</p> -->

        <!-- v2 -->
        <p class="font-sans-xs color-white-50">Il progetto è stato selezionato dal Fondo per la Repubblica Digitale Impresa sociale nell’ambito del bando “crescerAI”, sostenuto da Google.org. Attraverso “crescerAI” sono stati selezionati progetti rivolti allo sviluppo di soluzioni di Intelligenza Artificiale di tipo open source destinate alle piccole e medie imprese del Made in Italy, incluse le imprese sociali. Per maggiori informazioni <a href="https://www.fondorepubblicadigitale.it" class="font-sans-xs" target="_blank">www.fondorepubblicadigitale.it</a>.</p>

        <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->
        <p class="font-sans-xs color-white-50">
          <a class="font-sans-xs" href="#" id="open_preferences_center">Update cookies preferences</a>
        </p>

      </div>
    </div>
  </div>
</footer>


<?php snippet("menu", $menuOptions) ?>

<?= js(['assets/js/common.js?v=' . option('assets.version')]) ?>

<?php snippet('seo/schemas'); ?>

</body>

</html>