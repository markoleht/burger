<?php
for($count = 1; $count <= 20; $count++){
  echo $count.'&nbsp;';
  if($count < 10) {
    echo '&nbsp;&nbsp;';
  }
  echo '*';
  echo '<br>';
}
