<?php>
require_once("../model/model.php");

$tasks =  get_all_tasks();
$projects = get_all_projects();

$tasksArray = [];
$projectsArray = [];

    array.push($tasksArray, 'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5 )
    array.push($projectsArray, 'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5 )

    if(isset($_GET[$tasksArray])) {
        echo json_encode($tasksArray)
    }

    if(isset($_GET[$tasksArray])) {
        echo json_encode($projectsArray)
    }
    
    // echota JSON formatit

?>