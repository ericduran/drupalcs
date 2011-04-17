<?php

/**
 * Valid Test Case with comma separating each elements.
 */
$some_array = array('hello', 'world', 'foo' => 'bar');

/**
 * Valid Test Case With Comma at the end of the last value.
 */
$array['title'] = array(
  '#type' => 'textfield',
  '#title' => t('Title'),
  '#size' => 60,
  '#maxlength' => 128,
  '#description' => t('The title of your node.'),
);


//Invalid Test Cases Below

/**
 * Arrays should be formatted with a space separating each element (after the comma), 
 * and spaces around the => key association operator, if applicable.
 */
$some_array = array('hello','world','foo' =>'bar');

/**
 * Missing Comman at the end of the #description value
 */
$form['title'] = array(
  '#type' => 'textfield',
  '#title' => t('Title'),
  '#size' => 60,
  '#maxlength' => 128,
  '#description' => t('The title of your node.')
);