<?php
if(!isset($_SESSION))
  session_start();

if (isset($_SESSION['auth']))
  session_destroy();

header('Location: /admin');
