<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    
    // Validate password strength
    $uppercase    = preg_match('@[A-Z]@', $password);
    $lowercase    = preg_match('@[a-z]@', $password);
    $number       = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\w]@', $password);
    
    if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
      echo 'Password is not Strong';
    } else {
      echo 'Password is Strong';
    } 
  }
  ?>