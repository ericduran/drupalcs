<?php

//Invalid Test Cases Below

$condition1 = TRUE;
$condition2 = FALSE;
$condition3 = NULL;
$condition5 = TRUE;

if ($condition1 || $condition2) {
  return;
}
else if ($condition3 && $condition4) {
  return;
}
else {
  return;
}


IF ($condition1 || $condition2) {
  return;
}
ELSE if($condition3 && $condition4) {
  return;
}
else{
  return;
}


switch($condition) {
  case 1:
    return;
    break;

  case 2:
    return;
    break;

  default:
    return;
}


do{
  $actions;
} while ($condition);
