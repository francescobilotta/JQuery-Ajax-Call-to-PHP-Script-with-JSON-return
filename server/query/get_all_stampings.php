<?php
function getAll($startDate, $endDate){
    include "./connections/ore.db.php";
    $return_arr = array();
    $query = "SELECT * FROM ore.turni";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $id = $row['ID'];
        $department = $row['reparto'];
        $name = $row['nome'];
        $hours = $row['ore'];

        $return_arr[] = array(
            "id" => $id,
            "department" => $department,
            "name" => $name,
            "hours" => $hours
        );
    }
    echo json_encode(array("results" => $return_arr, "status" => "ok"));
}

