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
          <div class="d-none d-lg-flex align-items-center">
            <a class="menu-item" href="<?= $site->url() ?>#il-prgetto">Come funziona</a>
            <a class="menu-item" href="<?= $site->url() ?>#news">News</a>
            <a class="menu-item" href="<?= $site->url() ?>#partners">Partners</a>

            <?php foreach ($site->menuItems()->toStructure() as $item):
              if ($item->active()->toBool() === false) {
                continue;
              }
              $current = false;
              if ($page->is($item->menuLink()->toPage())) {
                $current = true;
              }
            ?>
              <a class="menu-item<?= $current ? " current" : "" ?>" href="<?= $item->menuLink()->toUrl() ?>"><?= $item->menuText()->value() ?></a>
            <?php endforeach ?>


            <!-- <a class="menu-item button d-none d-md-inline-flex" href="https://forms.office.com/e/N1nr6Ft1pn" target="_blank">Richiedi informazioni</a> -->
            <a class="menu-item button d-none d-md-inline-flex" href="https://app.tornatura.it" target="_blank">Web-app &rarr;</a>
          </div>

          <div id="hamburger-container d-lg-none">
            <div class="d-lg-none mt-1">
              <button class="hamburger hamburger--slider" type="button" onclick="toggleMenu()">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="overlay" onclick="toggleMenu()"></div>

<div id="menu-xs">
  <div class="flex-grow-1 d-flex align-items-center justify-content-center flex-column">
    <?php foreach ($site->menuItems()->toStructure() as $item):
      if ($item->active()->toBool() === false) {
        continue;
      }
      $current = false;
      if ($page->is($item->menuLink()->toPage())) {
        $current = true;
      }
    ?>
      <a class="item<?= $current ? " current" : "" ?>" href="<?= $item->menuLink()->toUrl() ?>"><?= $item->menuText()->value() ?></a>
    <?php endforeach ?>
  </div>
  <div>
    <a class="menu-item button w-100 text-center" href="https://app.tornatura.it" target="_blank">Web-app &rarr;</a>
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

  // --- Menu

  function toggleMenu(newState) {
    var isOpen = document.querySelector("body").classList.contains("menu-xs-open");
    if (newState === true || newState === false) {
      isOpen = !newState;
    }
    // state.menuXsOpen = !isOpen;
    document.querySelector("body").classList.toggle("menu-xs-open", !isOpen);
    document.querySelector("button.hamburger").classList.toggle("is-active", !isOpen);
  }
</script>