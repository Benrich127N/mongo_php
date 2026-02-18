<?php

$role = 'admin';

switch ($role) {

  case 'admin': 
          echo "Full Access";
          break;
  case 'editor':
          echo "Can edit post";
          break;
  default:
          echo "Guest Access";



}

