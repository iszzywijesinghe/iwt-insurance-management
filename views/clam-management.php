<!DOCTYPE html>
<html lang="en">
<?php include ("../services/clam-management-service.php");
?>

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

<?php
    include ("../services/vehicle-services.php");

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

    ?>

    <div class="container-fluid">
        <div class="row content">
            <?php include ("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
                <button style="margin-bottom: 45px;" type="button" class="btn btn-info btn-lg" data-toggle="modal"
                    data-target="#myModal">
                    Add Clams</button>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Claim Id</th>
                            <th>Vehicle No</th>
                            <th>Vehicle Photos</th>
                            <th>Date</th>
                            <th>Accident Grade</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (viewClams()->num_rows > 0) {
                            foreach (viewClams()->fetch_all() as $clam) {
                                echo "<tr>";
                                echo "<td>" . $clam[0] . "</td>";
                                echo "<td>" . $clam[1] . "</td>";
                                echo "<td>" . $clam[2] . "</td>";
                                echo "<td>" . $clam[3] . "</td>";
                                echo "<td>" . $clam[4] . "</td>";
                                echo "<td>";
                                echo "<div>";
                                // echo " <form method='post' enctype='multipart/form-data'>";
                                echo " <button onclick='getClamId(" . $clam[0] . ")' data-toggle='modal' data-target='#updateModal' class='btn btn-primary edit'>Edit</button>";
                                // echo " </form>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } ?>
                    </tbody>
                </table>


                <!-- Insert Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Clams</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Vehicle No</label>
                                        <input type="text" class="form-control" id="v-no" placeholder="Enter Vehicle no"
                                            name="v-no" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Photos</label>
                                        <input type="text" class="form-control" id="v-photos"
                                            placeholder="Enter Vehicle Photos" name="v-photos" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" id="v-date" placeholder="Enter Date"
                                            name="v-date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Grade</label>
                                        <select class="form-select form-select-lg" name="v-grade" required>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="v-submit" class="btn btn-default">Add</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Insert Modal -->

                <!-- Update Modal -->
                <div class="modal fade" id="updateModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Update Clams</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="clamId" id="clamId">
                                    <div class="form-group">
                                        <label>Vehicle No</label>
                                        <input type="text" class="form-control" id="v-no" placeholder="Enter Vehicle no"
                                            name="v-no"  value="<?php echo $clamRow["vehicle_no"];?>" required  >
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>Vehicle Photos</label>
                                        <input type="text" class="form-control" id="v-photos"
                                            placeholder="Enter Vehicle Photos" name="v-photos" value="<?php echo $clamRow["vehicle_photos"];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" id="v-date" placeholder="Enter Date"
                                            name="v-date" value="<?php echo $clamRow["date"];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Grade</label>
                                        <select class="form-select form-select-lg" name="v-grade" value="<?php echo $clamRow["accident_grade"];?>" required>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
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
                <!-- End of Update Modal -->
            </div>
        </div>m
    </div>

</body>

</html>