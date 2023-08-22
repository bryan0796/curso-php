<?php

$person = function($name) {
  return $name;
};

var_dump($person('Alexandre'));

function teste($name) {
  $person = function() use($name){
    return $name;
  };
  return $person;
}

var_dump(teste('Bryan')());