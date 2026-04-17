<?php
$ass = $kirby->url("assets") . "/images";
$bgBlurUrl = "$ass/blurred-color-bg.jpg";
$bookletImgUrl = "$ass/booklet.png";
?>

<section style="background-image: url('<?= $bgBlurUrl ?>'); background-size: cover; background-position: center center;">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 space-2"></div>
    </div>

    <div class="row">

      <div class="col-lg-6 py-3 d-flex align-items-center order-lg-2">
        <a href="" style="pointer-events: none;"><img class="img-fluid" style="width: 300px;" src="<?= $bookletImgUrl ?>" /></a>
      </div>

      <div class="col-lg-6 py-3 d-flex align-items-center order-lg-1">
        <div class="pr-5">
          <h3><strong>Guida di utilizzo della web app</strong></h3>
          <p>Qui troverai la documentazione dettagliata sull’utilizzo e sulle funzionalità di Tornatura.</p>
          <p class="my-4">
            <a href="<?= page("risorse-e-guide")->url() ?>" class="font-sans-s button secondary py-2 px-3">Tutte le guide e risorse</a>
            <?php if ($file = page("risorse-e-guide")->file('w_guida_rapida-m.pdf')): ?>
              <a href="<?= $file->url() ?>" target="_blank"
                class="font-sans-s button py-2 px-3">&darr; Scarica in PDF</a>
            <?php endif ?>
          </p>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-12 space-2"></div>
    </div>

  </div>
  </div>
</section>