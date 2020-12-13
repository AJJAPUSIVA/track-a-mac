<?php
  include('config.php');
 
   $sql =<<<EOF
      SELECT * from ListOfMacs;
EOF;
   $result = $db->query($sql);
   while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
      echo   $row['device']." | ".$row['vlans']." | ".$row['port']." | ".$row['macs']."\n";

   }
   
   $db->close();
?>

