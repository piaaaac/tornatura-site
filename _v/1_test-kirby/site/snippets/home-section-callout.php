<?php
$ass = $kirby->url("assets") . "/images";
$bgBlurUrl = "$ass/blurred-color-bg.jpg";
$bookletImgUrl = "$ass/booklet.png";
?>

<section style="background-image: url('<?= $bgBlurUrl ?>'); background-size: cover; background-position: center center;">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 space-3"></div>
    </div>

    <div class="row">

      <div class="col-lg-6 d-fled align-items-center order-lg-2">
        <a href=""><img class="img-fluid" style="width: 300px;" src="<?= $bookletImgUrl ?>" /></a>
      </div>

      <div class="col-lg-6 d-fled align-items-center order-lg-1">
        <div class="pr-5">
          <h4>Roadmap Tornatura App</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed turpis sed ipsum vehicula bibendum imperdiet in orci. In vel vestibulum nisi.</p>
          <p>
            <a class="button" href="https://google.com" target="_blank">Scarica il documento</a>
          </p>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-12 space-3"></div>
    </div>

  </div>
  </div>
</section>