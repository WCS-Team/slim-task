<?php
$app->get('/api/starships', function ($request, $response, array $args) {

    require_once('dbconnection.php');

    $query = "select * from starships order by id";
    
    $result = $mysqli->query($query);
    // var_dump($result);
    while ($row = $result->fetch_assoc()){
   $data[] = $row;
    }
    echo json_encode($data);
});