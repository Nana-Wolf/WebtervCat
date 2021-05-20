<?php

  function loadUsers($path) {
    $users = [];
    $path = "users.txt";
      try {
         $file = fopen($path, "r");
          while (($line = fgets($file)) !== FALSE) {
              $user = unserialize($line);
              $users[] = $user;
          }
      } catch (Exception $e) {
          echo 'Ez a hiba: ', $e->getMessage(), "\n";
      }
    fclose($file);
    return $users;
    }

  function saveUsers($path, $users) {
      $file = fopen($path, "a");

      if ($file === FALSE){
          die("HIBA: A fájl megnyitása nem sikerült!");
      }

      foreach($users as $user) {
          $serialized_user = serialize($user);
          fwrite($file, $serialized_user . "\n");
      }

      fclose($file);
  }

?>