<?php 

function getdata($query) {
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

?>