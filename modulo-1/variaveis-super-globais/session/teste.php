<?php

if(isset($_SESSION['name'])) {
  echo 'Sessão existe '.$_SESSION['name'];
} else {
  echo 'sessão não existe';
}

