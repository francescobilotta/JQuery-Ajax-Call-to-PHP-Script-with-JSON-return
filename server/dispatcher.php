<?php
include("./utils/helperFunctions.php");

//QUERIES
include("./query/get_all_stampings.php");

if (is_ajax()) {
  
  $action = $_POST['action'];
  switch($action){
    case "getAll":
      getAll($_POST["startDate"], $_POST["endDate"]);
    default:
  }
}
