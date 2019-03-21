<?php include_once('localDBconfig.php'); ?>

<?php
$data = array();
$query = "SELECT * FROM sensor_info";


$selectAll = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($selectAll)){
    $data[] = $row;
}
// output header
header('Content-type: application/json');
echo json_encode($data);  


?>