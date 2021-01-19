<?php 

function get_categories($link) {
    $sql = "SELECT * FROM `humans`";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);
    
    return $categories;
}


function get_info($link) {
    $sql = "SELECT * FROM `form`";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $categories;
}

?>