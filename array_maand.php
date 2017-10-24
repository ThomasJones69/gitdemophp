<?php
//met hulp van Khaldoon
 
 $dag = array ("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
 $counter=0;
 $dagcounter=1;
 
 
     for($counter=1; $counter < 32; $counter++){
         
     echo "$counter"."-01-2018";
     if($dagcounter < 7)
     {
         echo "- $dag[$dagcounter]";
         $dagcounter++;
         echo"<br>";
     }
    else {
         $dagcounter=0;
         echo "- $dag[$dagcounter]";
         $dagcounter++;
         echo"<br>";
     }
    
         
     }
