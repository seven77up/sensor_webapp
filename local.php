<?php include_once 'localDBconfig.php';?>

<?php

if(isset($_POST['add'])) {

    $sensorName = $_POST['sensorName'];
    $temperature = $_POST['temperature'];

if(!empty($sensorName) && !empty($temperature)){
    $InsertQuery = "INSERT INTO sensor_info(sensor_name,temperature)";
    $InsertQuery .= "VAlUES('$sensorName','$temperature')";

    $query = mysqli_query($connection, $InsertQuery); 
}

}

if(isset($_POST['updateToAzure'])) {

    $azureUrl = "http://localhost/updateToAzure.php"; 

   file_get_contents($azureUrl); 

}



?>
<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Local Database</title>
    <meta name="keywords" content="Sensor Monitoring System" />
    <meta name="description" content="Real Time Sensor Monitoring System">
    <meta name="author" content="AOGO Technologies Pte Ltd">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
			maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="http://localhost/" class="logo">
                    <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <form action="pages-search-results" class="search nav-form">
                    <div class="input-group input-search">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>

                <span class="separator"></span>

                <!-- Notification Section -->
                <ul class="notifications">
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="pull-right label label-default">3</span>
                                Alerts
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-thumbs-down bg-danger"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-lock bg-warning"></i>
                                            </div>
                                            <span class="title">Sensor 9 was overhead</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-signal bg-success"></i>
                                            </div>
                                            <span class="title">Connection Restored</span>
                                            <span class="message">10/10/2019</span>
                                        </a>
                                    </li>
                                </ul>

                                <hr />

                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Notification Section -->
                <span class="separator"></span>

            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="module1.php">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Module 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="module2.php">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Module 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="module3.php">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Module 3</span>
                                    </a>
                                </li>

                                <li class="nav-active">
                                    <a href="local.php">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Local DB</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="azure.php">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Azure DB</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>

                        <hr class="separator" />

                        <div class="sidebar-widget widget-stats">
                            <div class="widget-header">
                                <h6>Sensor Port Full Status</h6>
                                <div class="widget-toggle">+</div>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="stats-title">Module 1</span>
                                        <span class="stats-complete">100%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 100%;">
                                                <span class="sr-only">100% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="stats-title">Module 2</span>
                                        <span class="stats-complete">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="stats-title">Module 3</span>
                                        <span class="stats-complete">60%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Local Database</h2>

                    <div class="right-wrapper pull-right rightMargin">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Local Database</span></li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->

                <!-- add data to local db -->
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Local Database</h2>
                        </header>
                        <div class="panel-body">
                            <div class="blockingAddress-container">
                                <div class="col-md-12">
                                    <h4><i class="fa fa-plus-square"></i> Add Record To Local DB</h4>
                                </div>
                                <form class="loginFrom" method="post">
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <input type="text" name="sensorName" class="form-control"
                                                placeholder="sensor name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <input type="text" name="temperature" class="form-control"
                                                placeholder="temperature">
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="form-group loginButton">
                                            <input type="submit" name="add" value="Add"
                                                class="mb-xs mt-xs mr-xs btn btn-success">
                                        </div>
                                    </div>

                                </form>

                                <form class="loginFrom" method="post" >
                                    <div class="col-md-12">
                                        <div class="form-group loginButton">
                                            <input type="submit" name="updateToAzure" value="Update To Azure DB"
                                                class="mb-xs mt-xs mr-xs btn btn-success">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </section>
                </div>



                <!-- add data to local db -->

                <!-- local database -->
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Local Database</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table mb-none">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sensor</th>
                                            <th>Temperature</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
$getLocalDbData = "SELECT * FROM sensor_info";
$query = mysqli_query($connection, $getLocalDbData);

if ($query) {

    $count = mysqli_num_rows($query);

    if ($count == 0) {
        echo "<tr><td></td>";
        echo "<td>No Record In Local Database!</td>";
        echo "<td class='actions'></td></tr>";
    } else {

        $number = 1;
        while ($row = mysqli_fetch_assoc($query)) {
            $sensor_name = $row['sensor_name'];
            $temperature = $row['temperature'];
            echo "<tr><td>$number</td>";
            echo "<td>$sensor_name</td>";
            echo "<td>$temperature</td>";
            echo "</tr>";

            $number++;
        }
    }
}
?>


                                        <!--
                                        <tr>
                                            <td>1</td>
                                            <td>Room1 Sensor</td>
                                            <td>24.5</td>
                                        </tr> -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- local database -->

                <!-- end: page -->
            </section>
        </div>


    </section>

    <!-- Vendor -->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <!-- Specific Page Vendor -->
    <script src="assets/vendor/select2/select2.js"></script>
    <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
</body>

</html>