<?php
  header('HTTP/1.1 301 Moved Permanently'); 
  header('Location: /project-empatic' . ($_SERVER['QUERY_STRING']? '?' . $_SERVER['QUERY_STRING']: ''));
  exit();
?>