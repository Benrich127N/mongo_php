<?php



//mongo://admin:password123@192.32.22:27017/axzar/?authsource=admin

//admin:p@ssword123@: Your credentials.

///axzar: Tells the driver to jump straight into the axzar database upon connection.


//?authSource=admin: An option telling MongoDB to look for your username in the "admin" collection.

$conn =$db->getconnection();