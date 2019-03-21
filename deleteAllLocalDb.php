<?php include_once('localDBconfig.php'); ?>

<?php

$query = "DELETE FROM sensor_info";

mysqli_query($connection, $query);


?>