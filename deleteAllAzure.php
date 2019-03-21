<?php include_once('azureDatabase.php'); ?>

<?php

$query = "DELETE FROM sensor_info";

mysqli_query($azure_connection, $query);


?>