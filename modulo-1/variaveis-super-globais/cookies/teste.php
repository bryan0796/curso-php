<?php

if(isset($_COOKIE['teste'])) {
  echo $_COOKIE['teste'];
} else {
  echo 'Cookie não existe';
}
echo $_COOKIE['curso'];