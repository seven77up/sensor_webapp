
<?php
$db['db_host'] = "localhost";
$db['db_user'] = "seven77up";
$db['db_pass'] = "delld620";
$db['db_name'] = "sensor";

foreach($db as $key => $value){  
 define(strtoupper($key), $value);   
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//   if(!$connection){ 
//       die("Database connection failed: " . mysqli_connect_error());
//     } else {
//       echo "Connected!" . "<br>";
//     }
?>