<?php

include 'dbconfig.php';

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM course_info_table") or die(mysqli_error($conn));

while($row =  mysqli_fetch_assoc($result)){
            $user_arr[] = $row['course_title'];
}
echo json_encode($user_arr);


?>