<?php 
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
unset($_SESSION["email"]);
echo '<h1 style="text-align: center;">Uspjesna odjava!</h1>';
  
?>

