<?php
session_start();

if (!isset($_SESSION['lastname'])){

  header("Location: /");
  die();
}

echo "hello ". $_SESSION['lastname'];
