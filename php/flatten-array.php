<?php

// flatten an array using array_reduce
function flatten_array($array) {
  return array_reduce($array, function($accumulator, $current) {
    return array_merge($accumulator, is_array($current) ? flatten_array($current) : [$current]);
  }, []);
}

// flatten an array using a while loop
function flatten_array_v2($array) {
  while ($array[0] && is_array($array[0])) {
    $array = call_user_func_array('array_merge', $array);
  }
    
  return $array;
}
