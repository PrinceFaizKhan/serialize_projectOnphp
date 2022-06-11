<?php 
include "db.php";



$selecthead = "SELECT * FROM home WHERE section='service_section'";
$queryhead = mysqli_query($conn,$selecthead);
if(mysqli_num_rows($queryhead) > 0){
  $row1 = mysqli_fetch_array($queryhead);
 $data1 = unserialize($row1['data']);
 echo "<pre>";
 print_r($data1);
 echo "</pre>";

 

 
  
          
             
            }  
        
                          
            
            


            
            


?>