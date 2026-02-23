<?php

$pipeline =[ 

['$match' => ['status' => 'completed'],],

['$group' => ['_id' => '$customer_id', 'total' => ['$sum' => '$amount']],




['$sort' => ['total' => -1] ],

['$limit' => 10],

['Project' => ['name' => 1,
'email' => 1,

]]





]



];