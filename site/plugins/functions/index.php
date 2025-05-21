<?php

/**
 * 
 * Die and inspect variable
 * 
 */
function kill($var, $continue = false)
{
  $msg = "<pre>" . print_r($var, true) . "</pre>";
  if (isset($continue) && $continue === true) {
    echo $msg;
  } else {
    die($msg);
  }
}


/**
 * 
 * Map from a range to another
 * via https://stackoverflow.com/a/7743244/2501713
 * 
 */
function map($value, $fromLow, $fromHigh, $toLow, $toHigh)
{
  $fromRange = $fromHigh - $fromLow;
  $toRange = $toHigh - $toLow;
  $scaleFactor = $toRange / $fromRange;

  // Re-zero the value within the from range
  $tmpValue = $value - $fromLow;
  // Rescale the value to the to range
  $tmpValue *= $scaleFactor;
  // Re-zero back to the to range
  return $tmpValue + $toLow;
}
