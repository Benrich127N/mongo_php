<?php

$status = "In Progress";


if ($status === 'Pending') {
  echo "Order is waiting";
} elseif ($status === "In Progress") {

  echo "Machine Is Running";
} 

else
    {
      echo "Status unknown";
    }
