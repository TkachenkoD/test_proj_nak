<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $n = $_POST['userName'];
  $ph = $_POST['userPhone'];
  $it = $_POST['items'];

  echo "Users name $n";
file_put_contents("apps.txt", "$n\n $ph\n $it\r\n", FILE_APPEND);
}
 ?>
