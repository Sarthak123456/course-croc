<?php
include 'dbconfig.php';
$searchTerm = $_GET['term'];
$query = mysqli_query($conn,"SELECT distinct content_ref_table.title FROM content_ref_table WHERE title LIKE '%".$searchTerm."%' ORDER BY title ASC limit 0,10");
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row['title'];
}
echo json_encode($data);
?>