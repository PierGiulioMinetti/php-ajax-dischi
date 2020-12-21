<?php include __DIR__ . "/database.php";
$filtered_Db = [];

if ((empty($_GET)) || ($_GET['genre'] === 'all') ) {
    // if the string is empty return the array complete
    $filtered_Db = $database;
} else {
    // check filter
    $filter = $_GET['genre'];
    foreach ($database as $album) {
        if ( in_array($filter, $album)) {
            $filtered_Db[] = $album;
        }
    };
}

header('Content-Type:application/json');
echo json_encode($filtered_Db);
         
?>