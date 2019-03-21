
<?php
// $db['db_host'] = "webappmysql11-mysqldbserver.mysql.database.azure.com";
// $db['db_user'] = "seven77up@webappmysql11-mysqldbserver";
// $db['db_pass'] = "#Aogo2019";
// $db['db_name'] = "myazure";


$db['db_host'] = "sensorapp11-mysqldbserver.mysql.database.azure.com";
$db['db_user'] = "seven77up@sensorapp11-mysqldbserver";
$db['db_pass'] = "#Aogo2019";
$db['db_name'] = "sensor";

foreach($db as $key => $value){  
 define(strtoupper($key), $value);   
}

//mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$azure_connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

  // if(!$azure_connection){ 
  //     die("Database connection failed: " . mysqli_connect_error());
  //   } else {
  //     echo "Connected!" . "<br>";
  //   }
?>