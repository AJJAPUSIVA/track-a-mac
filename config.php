<?php
   class Trackamacdb extends SQLite3 {
      function __construct() {
         $this->open('nplab.db');

       }
}
$db = new Trackamacdb();

$sq1 =<<<EOF

   CREATE TABLE IF NOT EXISTS ListOfMacs(device varchar not null,vlans varchar not null,port varchar,macs  varchar);
EOF;
$result = $db->exec($sq1);
if(!$result){
  echo $db->lastErrorMsg();
}
$sql =<<<EOF

     CREATE TABLE IF NOT EXISTS devices (ip varchar not null,port varchar not null,community string not null,version varchar not null,first_probe varchar null,last_probe varchar null,failed_attempts int default 0 not null);

EOF;




   $result2 = $db->exec($sql);

   if(!$result2){

      echo $db->lastErrorMsg();

   }

?>
