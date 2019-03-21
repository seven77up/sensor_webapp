
    <?php include "azureDatabase.php"; ?>
    <?php


    $url = "http://localhost/showAllLocalDbData.php"; 

    $data = file_get_contents($url); 
    $decodedDatas = json_decode($data,true);

    foreach ($decodedDatas as $data) {
        $sensor_name = $data['sensor_name'];
        $temperature = $data['temperature'];

        $InsertToAzureQuery = "INSERT INTO sensor_info(sensor_name,temperature)";
        $InsertToAzureQuery .= "VAlUES('$sensor_name','$temperature')";

        $query = mysqli_query($azure_connection, $InsertToAzureQuery);    

    }
    $deleteUrl = "http://localhost/deleteAllLocalDb.php"; 

    file_get_contents($deleteUrl); 

    // $sensor_name = $_GET['sensor_name'];
    // $temperature = $_GET['temperature'];

    // $InsertToAzureQuery = "INSERT INTO sensor_info(sensor_name,temperature)";
    // $InsertToAzureQuery .= "VAlUES('$sensor_name','$temperature')";

    // $query = mysqli_query($azure_connection, $InsertToAzureQuery);            
    // // if($query){
    //     echo 1;
    // }else{
    //     echo 0; 
    // }

    ?>