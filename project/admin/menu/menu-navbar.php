<?php 
include "db.php";



$selecthead = "SELECT * FROM home WHERE section='Hslide_section'";
$queryhead = mysqli_query($conn,$selecthead);
if(mysqli_num_rows($queryhead) > 0){
  $row1 = mysqli_fetch_array($queryhead);
 $data1 = unserialize($row1[2]);
  $i= 1;
 foreach($data1['Title'] as $key1 => $udata1){
   $actives = "";
   if($i==1){
     $actives = 'active';
   }             
    echo "<pre>";
    print_r($i);
    echo "</pre>";
             
            }  
        } 
                          
            
            


            
            


?>