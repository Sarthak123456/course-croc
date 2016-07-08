<?php
include 'dbconfig.php';
$searchTerm = $_GET['term'];
$query = mysqli_query($conn,"SELECT distinct title FROM content_ref_table WHERE content_ref_table.title LIKE '%".$searchTerm."%' or content_ref_table.description LIKE '%".$searchTerm."%' and (content_ref_table.content_type_id = 1 or content_ref_table.content_type_id = 2 or content_ref_table.content_type_id =3 or content_ref_table.content_type_id = 4) ORDER BY title ASC limit 0,15") or die(mysqli_error($conn));
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row['title'];
}
echo json_encode($data);
?>