<?php
 include 'includes/dbconfig.php';
?>
<form action="search.php" method="get">
<ul class="nav navbar-nav container-fluid col-md-12">
        
          <li class="col-md-3">
          <select class="form-control dropdown-toggle" data-toggle="dropdown" name="select_category">
         
           <option value="category">Select Category</option>
                        
                       
                    </select>
        </li>
   <li class="col-md-3">
          <select class="form-control dropdown-toggle" data-toggle="dropdown" name="select_course">
        
              <option value="course">Select Course</option>
                          
                      
                    </select>

   
        </li>
            <li class="col-sm-3">
            <select class="form-control dropdown-toggle"  name="select_subject">
          
           <option value="subjects">Select Subjects</option>
            
            </select> 
          
       
  </li>
         
<li class="col-md-3">
              <button type="submit" name="filter" class="btn form-control btn-primary" >Filter Results</button>
            </li>

       
    </ul>
</form>
 <br><br><hr>

   
       