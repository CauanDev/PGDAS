<?php
include("config.php");
if (isset($_GET['search'])) {
    $searchTerms = explode(',', $_GET['search']);

    $name = $searchTerms[0] ?? '';
    $cpf = $searchTerms[1] ?? '';
    $city = $searchTerms[2] ?? '';
    $conditions = [];

    if (!empty($name)) {
        $conditions[] = "name LIKE '%$name%'";
    }

    if (!empty($cpf)) {
        $conditions[] = "cpf LIKE '%$cpf%'";
    }

    if (!empty($city)) {
        $conditions[] = "city LIKE '%$city%'";
    }
    $whereClause = (empty($conditions)) ? '' : 'WHERE ' . implode(' AND ', $conditions);
    
    $sql = "SELECT * FROM users $whereClause";
} 

$result = mysqli_query($conn, $sql);

if ($result) 
{
    $users = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($users);
} 


