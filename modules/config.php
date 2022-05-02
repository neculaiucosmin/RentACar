<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','1234');
define('DB_NAME','pw');

// Establish database connection.

//$dbh = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);
//1PHT69wT1puU9ZAKcHuH7w

$serverApi = new ServerApi(ServerApi::V1);
$client = new MongoDB\Client(
    'mongodb+srv://cosmin24:<password>@cluster0.obore.mongodb.net/myFirstDatabase?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
$db = $client->test;
?>