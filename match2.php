<?php

function getStatusMessage(int $status_code): string 

{
            return match ($status_code) {
                200, 201 => "Success",
                404 => "Not Found",
                500 => "Server Error",
                default => "Unkown Error",


            };

}



$status_code = 200;

echo getStatusMessage($status_code);


echo "\n";


$status_code = 500;
echo getStatusMessage($status_code);