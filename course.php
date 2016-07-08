<?php
session_start();
include 'includes/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Courses</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
  <script type="text/javascript">
	$(document).ready(function()
	{

		var check = $('#compare').val();
		$("#compare").change(function() {
    if(this.checked) {        
        $.ajax({
        	type: 'POST',
        	url: 'compare.php',
        	dataType : 'JSON',
        	data:{value : check},
        	success: function(data)
        	{
        		console.log(data);
        		$('#compare_box').html(data);
        		
        	}
        });
       
        
$("#compare_box").show();
    }
    else
    {
    	$("#compare_box").hide();
    }		
     });
	});
  </script>
</head>
<body>
<?php
 $query = $_GET['search_bar'];
$query = "call fetch_data('$query')"or die(mysqli_error($conn));
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result))
{
	$id = $row['course_id'];
	$title = $row['course_title'];
	$description = $row['course_description'];
	$course_url = $row['course_url'];
	$video_url = $row['course_video_url'];
	$fee = $row['course_fee'];
	$duration = $row['course_duration'];
	$start_date = $row['course_start_date'];
	$university = $row['university_name'];
	$course_provider = $row['course_provider_name'];
	$instructor = $row['instructor_name'];
	 
			 $_SESSION['result'][$id]  = Array('id'=> $id,'course_title' => $title,'course_description'=> $description,'course_url' => $course_url,'video_url' => $video_url,'fee' => $fee,'course_duration'=>$duration,'start_date'=>$start_date,'university' => $university,'course_provider'=>$course_provider,'instructor'=>$instructor);
	?>
	
		
			<div id='compare_box'>
					<?php ##include 'compare_template.php'; ?>
			</div>
		
	
	     <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             
           <a href="final.php?id=<?php echo $id;?>&name=<?php echo $title;?>" target="_blank">
            <h4><small><?php echo $title; ?></small></h4>
           </a>
         <br>
         <input type ='checkbox' name="compare" id="compare" value="<?php echo $id;?>">add to compare
         </div>

    </div>
<?php  
}
//print_r($_SESSION['result']);
?>
</body>
</html>