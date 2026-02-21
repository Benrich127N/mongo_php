<?php


$pipeline = [

  'sort' => ['firstname' => 1],
  'limit' => [10],

];


$cursor = $collection->aggregate($pipeline);


//sort the from a-z asending order then limits it to 10 



$pipeline = [
'limit' => [10],
'sort' => ['firstname' => -1]

];

$cusor =$collection->aggregate($pipeline);


// this grabs to random records and sorts by ascending order and this wont be accurate