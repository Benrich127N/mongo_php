<?php


function displayUsers($Users)
{

  foreach ($Users as $User) {

    echo "User: $User <br>";
  }
}


$User1 = ["Alice", "Bob", "Charles"];

displayUsers($User1);