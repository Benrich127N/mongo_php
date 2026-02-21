<?php


// $bulk = new MongoDB\Driver\BulkWrite(['ordered' => order]);

$bulk->insert(['_id' => 1, 'name' => 'john']);
$bulk->update(['name' => 'john'], ['set' => ['age' => 30]]);
$bulk->delete(['_id' => 1]);



// $result $manager->executeBulkWrite('db.users', $bulk);

echo $result->getInsertedCount();