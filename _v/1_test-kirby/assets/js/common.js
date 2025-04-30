// ----------------------------------------------------------------
// Execution starts
// ----------------------------------------------------------------

// document.addEventListener("DOMContentLoaded", function () {
//   adjustMainHeight();
// });

// ----------------------------------------------------------------
// Functions
// ----------------------------------------------------------------

/**
 *
 * via https://stackoverflow.com/a/2450976/2501713
 *
 * */
function shuffle(array) {
  let currentIndex = array.length,
    randomIndex;
  while (currentIndex != 0) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;
    [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
  }
  return array;
}

/**
 *
 * via https://stackoverflow.com/a/28191966/2501713
 *
 * */
function getKeyByValue(object, value) {
  return Object.keys(object).find((key) => object[key] === value);
}

function adjustMainHeight() {
  var footer = document.querySelector("section#footer");
  var main = document.querySelector("main");
  var windH = window.innerHeight;
  var footH = footer.clientHeight;
  var mainH = main.clientHeight;
  main.style.minHeight = windH - footH + 1 + "px";
}

// ----------------------------------------------------------------
// Events
// ----------------------------------------------------------------

const header = document.querySelector(".menu");
const openingImage = document.querySelector("[data-role='opening-image']");

const observer = new IntersectionObserver(
  ([entry]) => {
    if (entry.intersectionRatio < 0.7) {
      header.classList.remove("transparent");
      console.log("sopra");
    } else {
      header.classList.add("transparent");
      console.log("sotto");
    }
  },
  {
    threshold: [0, 0.7, 1], // 0.4 means 60% out of view
  }
);

if (openingImage) {
  observer.observe(openingImage);
}
