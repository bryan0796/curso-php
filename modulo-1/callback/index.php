<?php

function teste($name) {
  return 'Olá meu nome é '.$name;
}

function teste2($callback) {
  if (is_callable($callback)) {
    return $callback('Bryan');
  } else {
    return 'não é callback';
  }
}
//echo teste2('teste');
// call_user_func
function teste3($name) {
  return $name;
}

//echo call_user_func('teste3','Bryan');
// invoke

class User {
  public function __invoke() {
    return 'teste';
  }
}

$user = new User;

function teste4($callback) {
  return $callback();
}

echo teste4($user);