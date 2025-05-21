var pathSector1 = "M22.9444,301.939c-16.7852-60.7204-8.5917-127.6018-8.6788-191.3905 c-0.0188-13.8047,2.707-124.7216,29.0845-98.7025C95.9024,63.6843-14.9334,232.751,30.1206,327.4757 C30.1206,327.4757,24.7113,308.3307,22.9444,301.939z";
var pathSector2 = "M20.317,312.607c4.863-22.378,1.969-47.185-0.481-70.392C10.608,168.016,0.572,89.208,49.142,25.441 C29.077,56.559,20.444,93.708,21.297,130.442c0.333,52.907,17.855,103.504,22.474,156.244c0.061,1.297,0.32,6.031,0.374,7.368 c0.02,1.869,0.026,5.646,0.038,7.489c-0.166,2.766-0.257,7.419-0.658,10.183c0,0-0.609,5.157-0.609,5.157 c-0.746,6.32-6.475,10.839-12.795,10.093C23.218,326.215,18.538,319.303,20.317,312.607L20.317,312.607z";

var pathChallenge0 = "M22.5695232,35 C26.989777,26.0017165 31.0395201,21.5025747 34.7187524,21.5025747 C40.2376009,21.5025747 41.8634746,16.1245816 41.8634746,7.84362579 C41.8634746,-0.437329971 36.12305,15.8871396 22.5695232,15.8871396 C9.01599647,15.8871396 5.8286401,-0.199888019 5.8286401,7.84362579 C5.8286401,15.8871396 4.97009293,21.5025747 11.0966319,21.5025747 C15.1809912,21.5025747 19.0052883,26.0017165 22.5695232,35 Z";
var pathChallenge1 = "M23.230311,29.5257271 C25.0380873,31.6329558 27.2324182,32.6053892 29.8133037,32.4430275 C33.684632,32.199485 39.2710907,16.941412 33.684632,14.6430766 C28.0981733,12.3447412 30.5742146,25.1251534 23.230311,25.1251534 C15.8864074,25.1251534 20.0023488,14.6430766 14.1593559,14.6430766 C8.31636306,14.6430766 11.5112696,32.199485 17.0137882,32.4430275 C20.6821339,32.6053892 22.7543081,31.6329558 23.230311,29.5257271 Z";
var pathChallenge2 = "M38.404,11.077c17.921,57.997-32.106,145.657-7.747,213.67";

var pathAudience1 = "M23,35 C29.5930399,25.2558983 16.9087771,18.239393 19.8247737,7.79398722";

// ----------------------------------------------
// Start / setup
// ----------------------------------------------

var draw = SVG().addTo('#svg-cont').size('100%', '100%')

var blabbusModuleSector = draw.path(pathSector2);
blabbusModuleSector.size(null, 50);
blabbusModuleSector.hide();

var blabbusModuleChallenge = draw.path(pathChallenge2);
blabbusModuleChallenge.size(null, 15);
blabbusModuleChallenge.hide();

var blabbusModuleAudience = draw.path(pathAudience1);
blabbusModuleAudience.size(null, 55);
blabbusModuleAudience.hide();

var groupBlabbuses = draw.group();
groupBlabbuses.addClass("blabbuses");

var radial = draw.gradient('radial', function(add) {
  add.stop(0, 'rgba(255, 255, 0, 0.5)')
  add.stop(1, 'rgba(255, 255, 0, 0)')
});

var dictSectors = {
  "applied_arts": 0,
  "cinema": 1,
  "design": 2,
  "education": 3,
  "entertainment": 4,
  "literary_arts": 5,
  "music": 6,
  "other": 7,
  "performative_arts": 8,
  "social_entrepreneurship": 9,
  "social_services": 10,
  "visual_arts": 11,
}

var dictChallenges = {
  "challenge1": 1,
  "challenge2": 2,
  "challenge3": 3,
  "challenge4": 4,
  "challenge5": 5,
  "challenge6": 6,
  "challenge7": 7,
  "challenge8": 8,
  "challenge9": 9,
  "challenge10": 10,
  "challenge11": 11,
  "challenge12": 12,
  "challenge13": 13,
  "challenge14": 14,
}

loadJSONAndInit();

// ----------------------------------------------
// Functions
// ----------------------------------------------

function createBlabbus (x, y, size = 500, d) {
  
  // data
  var itemSectors = d.sectors.split(",").map(e => e.trim());
  // console.log(itemSectors)
  var itemChallenges = d.challenges.split(",").map(e => e.trim());
  for (var i = itemChallenges.length - 1; i >= 0; i--) {
    if (itemChallenges[i].substring(0, 9) !== "challenge") {
      itemChallenges.splice(i, 1);
    }
  }
  console.log(itemChallenges)

  // group
  var group = draw.group();
  group.addClass("pioneer");
  group.addClass("anim-" + Math.ceil(Math.random() * 3));
  group.addClass("anim-duration-" + Math.ceil(Math.random() * 3));
  
  // bg
  var sizeCircle = group.circle(size);
  sizeCircle.addClass("size-circle");
  sizeCircle.cx(0).cy(0);
  sizeCircle.fill(radial)

  // audience path
  var audNumMax = 100;
  var audNum = +d.direct_target_audience_count * 0.1;
  if (!audNum) { audNum = 0; }
  if (audNum > audNumMax) { audNum = audNumMax; }
  for (var i = 0; i < audNum; i++) {
    var l = size/2;
    var rand1 = Math.random() * l * -0.15;
    var rand2 = Math.random() * l * 0.1;

    var audMod = blabbusModuleAudience.clone();
    audMod.addClass("audience");
    audMod.show();
    audMod.cx(0).cy(-27.5 + rand1);
    group.add(audMod);

    var rotation = i / audNum * 360;
    audMod.transform({
      rotate: rotation,
      // origin: 'bottom center',
      origin: [0, 0],
    });
  }

  // // audience lines
  // var audNumMax = 100;
  // var audNum = +d.direct_target_audience_count * 0.1;
  // if (!audNum) { audNum = 0; }
  // if (audNum > audNumMax) { audNum = audNumMax; }
  // for (var i = 0; i < audNum; i++) {
  //   var l = size/2;
  //   var rand1 = Math.random() * l * -0.15;
  //   var rand2 = Math.random() * l * 0.1;
  //   var audMod = group.line(0, rand1, 0, -l + rand2);
  //   audMod.addClass("audience-line");
  //   // group.add(mod);
  //   var rotation = i / audNum * 360;
  //   audMod.transform({
  //     rotate: rotation,
  //     // origin: 'bottom center',
  //     origin: [0, 0],
  //   });
  // }

  // sector
  var modNum = 12;
  var itemSectorIndexes = itemSectors.map(e => dictSectors[e]);
  for (var i = 0; i < modNum; i++) {
    if (itemSectorIndexes.includes(i)) {
      var mod = blabbusModuleSector.clone();
      mod.addClass("sector");
      mod.data("sector-index", i);
      mod.data("sector-name", getKeyByValue (dictSectors, i));
      mod.show();
      mod.cx(0).cy(-25);
      group.add(mod);
      var rotation = i / modNum * 360;
      mod.transform({
        rotate: rotation,
        origin: 'bottom center',
      });
    }
  }

  // Challenges
  var challengeNum = 15;
  var itemChallengeIndexes = itemChallenges.map(e => dictChallenges[e]);
console.log(itemChallengeIndexes)
  for (var i = 0; i < challengeNum; i++) {
    if (itemChallengeIndexes.includes(i)) {

console.log(i)

      var modChallenge = blabbusModuleChallenge.clone();
      modChallenge.addClass("challenge");
      modChallenge.show();
      modChallenge.cx(0).cy(-27.5);
      group.add(modChallenge);
      var rotation = i / challengeNum * 360;
      modChallenge.transform({
        rotate: rotation,
        origin: [0, 0],
      });
    }
  }

  // Challenges random
  // var challengeNum = 15;
  // for (var i = 0; i < Math.random() * 5; i++) {
  //   var modChallenge = blabbusModuleChallenge.clone();
  //   modChallenge.addClass("challenge");
  //   modChallenge.show();
  //   modChallenge.cx(0).cy(-7.5);
  //   group.add(modChallenge);
  //   var rotation = Math.floor(Math.random() * challengeNum) * 360 / challengeNum;
  //   modChallenge.transform({
  //     rotate: rotation,
  //     origin: 'bottom center',
  //   });
  // }

  group.cx(x).cy(y);
  group.size(size);
  group.data("d", d);
  group.on('click', () => { handlePioneerClick(d); });
  setTimeout(() => { 
    // group.animate(400, 0, "now").size(finalSize);
    // group.animate(400, 0, "now").dmove(-finalSize/2, -finalSize/2);
    group.addClass("show"); 
  }, Math.random() * 1000);
  return group;
}

function handlePioneerClick (d) {
  console.log(d)
  console.log(d.sectors.split(",").map(e => e.trim()));
}

// V1 --- Create in random positions
// for (var i = 0; i < Math.random() * 50; i++) {
//   var x = Math.random() * window.innerWidth;
//   var y = Math.random() * window.innerHeight;
//   var blabbus = createBlabbus(x, y);
// }

// V2 --- Create n items equally distributed
// var w = document.querySelector("#svg-cont").clientWidth;
// var h = document.querySelector("#svg-cont").clientHeight;
// var n = 20;
// var totalArea = w * h;
// var pointArea = totalArea/n;
// var length = Math.sqrt(pointArea);

// for (var x = length/2; x < w; x += length) {
//   for (var y = length/2; y < h; y += length) {
//     var thisX = x + ((Math.random() * length - length/2) * 0.8);
//     var thisY = y + ((Math.random() * length - length/2) * 0.8);
//     var b = createBlabbus(thisX, thisY);
//   }
// }

// V1 --- in a grid with some variation
// function drawPioneers1 (items) {
//   var n = items.length;
//   var w = document.querySelector("#svg-cont").clientWidth;
//   var h = document.querySelector("#svg-cont").clientHeight;
//   var totalArea = w * h;
//   var pointArea = totalArea/n;
//   var length = Math.sqrt(pointArea);

//   shuffle(items)

//   for (var x = length/2; x < w; x += length) {
//     for (var y = length/2; y < h; y += length) {
//       var d = items.splice(0, 1)[0];
//       console.log("item="+ d.id, "remaining="+ items.length)
//       var thisX = x + ((Math.random() * length - length/2) * 0.8);
//       var thisY = y + ((Math.random() * length - length/2) * 0.8);
//       var blabbus = createBlabbus(thisX, thisY, 100, d);
//     }
//   }  
// }







/**
 * 
 * V2 --- Mitchell’s Best-Candidate implementation
 * 
 * via https://jsfiddle.net/pendensproditor/2XyV5
 * 
 */

function drawPioneers2 (items) {

  var margin = 50;

  var w = document.querySelector("#svg-cont").clientWidth - margin * 2;
  var h = document.querySelector("#svg-cont").clientHeight - margin * 2;
  var twoPi = Math.PI * 2;
  var samples = 50;     // candidate dots attempted, higher is better
  var positions = [];  // a dot is represented as [x, y]

  shuffle(items)

  // --- Start finding positions
  var interval = setInterval(function () {
    var d = items.splice(0, 1)[0];
    placeNewBlabbus(d);
    if (items.length <= 0) {
    // if (items.length <= 40) {
      clearInterval(interval);
    }
  }, 1);

  function placeNewBlabbus (d) {
    var pos = generateBestPosition();
    positions.push(pos);
    var blabbus = createBlabbus(pos[0] + margin, pos[1] + margin, 100, d);
    groupBlabbuses.add(blabbus);
  }

  function generateRandomPosition () {
    return [
      Math.round(Math.random() * w),
      Math.round(Math.random() * h)
    ];
  }

  function getDistanceToNearestPosition (pos) {
    var shortest;
    for (var i = positions.length - 1; i >= 0; i--) {
      var distance = getDistance(positions[i], pos);
      if (!shortest || distance < shortest) shortest = distance;
    }
    return shortest;
  }

  function getDistance (pos1, pos2) {
    var xDistance = Math.abs(pos1[0] - pos2[0]);
    var yDistance = Math.abs(pos1[1] - pos2[1]);
    var distance = Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));
    return Math.floor(distance);
  }

  function generateBestPosition () {
    var bestPos, bestPosDistance;
    for (var i = 0; i < samples; i++) {
      var candidatePos = generateRandomPosition();
      var distance;
      if (!positions.length) return candidatePos;
      distance = getDistanceToNearestPosition(candidatePos);
      if (!bestPos || distance > bestPosDistance) {
        bestPos = candidatePos;
        bestPosDistance = distance;
      }
    }
    return bestPos;
  }
}

async function loadJSONAndInit () {
  const response = await fetch(window.siteUrl + "/assets/data/pioneers_data.json");
  const jsonData = await response.json();
  console.log(jsonData);
  if (jsonData.length > 0) {
    drawPioneers2(jsonData);
    // drawPioneers2(jsonData.concat(jsonData).concat(jsonData).concat(jsonData).concat(jsonData));
  }
}
