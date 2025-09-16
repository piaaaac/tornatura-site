<?php
$title = $kirby->option("site.menuTitle");

$classNames = isset($classes) ? implode(" ", $classes) : "";

// $ass = $kirby->url("assets") . "/images";
// $logoWhiteUrl = "$ass/logo-color-white.svg";
// $logoBlackUrl = "$ass/logo-color-black.svg";
?>

<div class="menu transparent <?= $classNames ?>">
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-12 d-flex align-items-center justify-content-between">
        <div class="left">
          <a id="header-logo" class="menu-item" href="<?= $site->url() ?>" alt="<?= $title ?>"></a>
        </div>
        <div class="right">
          <a class="menu-item" href="<?= $site->url() ?>#il-prgetto">Come funziona</a>
          <a class="menu-item" href="<?= $site->url() ?>#news">News</a>
          <a class="menu-item" href="<?= $site->url() ?>#partners">Partners</a>
          <a class="menu-item button d-none d-md-inline-flex" href="https://forms.office.com/e/N1nr6Ft1pn" target="_blank">Richiedi informazioni</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // on scroll add a class to the menu
  document.addEventListener("scroll", function() {
    const menu = document.querySelector(".menu");
    const passed50px = window.scrollY > 50;
    const passed150px = window.scrollY > 150;
    menu.classList.toggle("hide-up", passed50px);
    menu.classList.toggle("transparent", !passed150px);
  });

  // on vertical scroll, toggle the unhide-up class accordingly
  let lastScrollTop = 0;
  window.addEventListener("scroll", function() {
    const menu = document.querySelector(".menu");
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
      // downscroll
      menu.classList.remove("unhide-up");
    } else {
      // upscroll
      menu.classList.add("unhide-up");
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
  }, false);
</script>