<?php


$pipeline = [

  'sort' => ['firstname' => 1],
  'limit' => [10],

];


$cursor = $collection->aggregate($pipeline);