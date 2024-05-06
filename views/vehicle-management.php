<!DOCTYPE html>
<html lang="en">

<head>
<title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../asserts/js/clam-management.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
    </style>

</head>

<body>

<?php
    
    include ("../utils/url-helper.php");
    include ("../services/vehicle-services.php");

    // add logic

    if (isset($_POST['Register'])) {

        $customerNic = $_POST['cus_nic'];
        $vehicleNo = $_POST['vehicle_no'];
        $engineNo = $_POST['engine_no'];
        $chassisNo = $_POST['chassis_no'];
        $insuranceType = $_POST['insurance_type'];
        $vehicleBrand = $_POST['vehicle_brand'];
        $vehicleModle = $_POST['vehicle_modle'];
        $vehicleValue = $_POST['vehicle_value'];
        $yom = $_POST['yom'];


        addVehicle($customerNic, $vehicleNo, $chassisNo, $engineNo, $insuranceType, $vehicleBrand, $vehicleModle, $vehicleValue, $yom);


    }

    // update logic 
    $vId = deconsturctURLFragment($_SERVER["QUERY_STRING"]);
    $clamRow = getUpdateRow($vId)->fetch_array(MYSQLI_ASSOC);



    ?>


    <div class="container-fluid">
        <div class="row content">
            <?php include ("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
                <button style="margin-bottom: 45px;" type="button" class="btn btn-info btn-lg" data-toggle="modal"
                    data-target="#myModal">
                    Add Vehicle</button>

<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>cus_nic</th>
                            <th>vehicle_no</th>
                            <th>engine_no</th>
                            <th>chassis_no</th>
                            <th>insurance_type</th>
                            <th>vehicle_brand</th>
                            <th>vehicle_modle</th>
                            <th>vehicle_value</th>
                            <th>yom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        if (viewVehicle()->num_rows > 0) {
                            foreach (viewVehicle()->fetch_all() as $vehicle) {
                                echo "<tr>";
                                echo "<td>" . $vehicle[0] . "</td>";
                                echo "<td>" . $vehicle[1] . "</td>";
                                echo "<td>" . $vehicle[2] . "</td>";
                                echo "<td>" . $vehicle[3] . "</td>";
                                echo "<td>" . $vehicle[4] . "</td>";
                                echo "<td>" . $vehicle[5] . "</td>";
                                echo "<td>" . $vehicle[6] . "</td>";
                                echo "<td>" . $vehicle[7] . "</td>";
                                echo "<td>" . $vehicle[8] . "</td>";
                                echo "<td>";
                                echo "<div>";
                                // echo " <form method='post' enctype='multipart/form-data'>";
                                echo " <button onclick='getVehicleId(" . $vehicle[0] . ")' data-toggle='modal' data-target='#updateModal' class='btn btn-primary edit'>Edit</button>";
                                // echo " </form>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } ?>
                    </tbody>
                </table>


                
<!-- Update Modal -->
<div class="modal fade" id="updateModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Update Vehicle</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="vId" id="clamId">
                                    <div class="form-group">
                                        <label>Customer NIC</label>
                                        <input type="text" class="form-control" id="cus_nic" placeholder="Enter cus_nic"
                                            name="cus_nic"  value="<?php echo $clamRow["cus_nic"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Number</label>
                                        <input type="text" class="form-control" id="vehicle_no" placeholder="Enter vehicle_no"
                                            name="vehicle_no"  value="<?php echo $clamRow["vehicle_no"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Engine No</label>
                                        <input type="text" class="form-control" id="engine_no" placeholder="Enter engine_no"
                                            name="engine_no"  value="<?php echo $clamRow["engine_no"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Chassis No</label>
                                        <input type="text" class="form-control" id="chassis_no" placeholder="Enter chassis_no"
                                            name="chassis_no"  value="<?php echo $clamRow["chassis_no"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Brand</label>
                                        <input type="text" class="form-control" id="vehicle_brand" placeholder="Enter vehicle_brand"
                                            name="vehicle_brand"  value="<?php echo $clamRow["vehicle_brand"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Modle</label>
                                        <input type="text" class="form-control" id="vehicle_modle" placeholder="Enter vehicle_modle"
                                            name="vehicle_modle"  value="<?php echo $clamRow["vehicle_modle"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Value</label>
                                        <input type="text" class="form-control" id="vehicle_value" placeholder="Enter vehicle_value"
                                            name="vehicle_value"  value="<?php echo $clamRow["vehicle_value"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Year of Manufacture (YOM)</label>
                                        <input type="text" class="form-control" id="yom" placeholder="Enter yom"
                                            name="yom"  value="<?php echo $clamRow["yom"];?>" required  >
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" name="v-edit-submit" class="btn btn-default">Add</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                </body>

                </html>