<?php 
include "db.php";



             $select = "SELECT * FROM home WHERE section='nav_section'";
             $query = mysqli_query($conn,$select);
             if(mysqli_num_rows($query) > 0){
             $row = mysqli_fetch_array($query);
             $data = unserialize($row[2]);
             $udata = $data['title'];
             $result=array_flip($udata);
             // input array 
             
  
             // comparator function to filter odd elements
             function oddCmp($result)
              {
                return ($result & 1);
              }
  
              // comparator function to filter odd elements
              function evenCmp($result)
              {
             return !($result & 1);
             }
  
             // filter odd-index elements
             $odd = array_filter($result, "oddCmp");
  
               // filter even-index elements
               $even = array_filter($result, "evenCmp");
  
             $odd_array = array_flip($odd);
             $even_array = array_flip($even);
             $length = count($even_array); for($i=0; $i<= $length; $i++){ echo $even_array[$i]; }
             
             
          

}
            

echo "<pre>";
 print_r($length);
 echo "</pre>";




?>