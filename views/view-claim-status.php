<!DOCTYPE html>
<?php include ("../services/claim-status-service.php"); ?>

<head>
    <title>View Claim Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../asserts/js/claim-status.js"></script>
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


    
    <?php include ("../partials/user-dashboard-navbar-sm.php");
    include ("../utils/url-helper.php"); 
     $clamId = deconsturctURLFragment($_SERVER["QUERY_STRING"]);
     $clamRow = getUpdateRow($clamId)->fetch_array(MYSQLI_ASSOC);
     

     if (isset($_POST['v-edit-submit'])) {

        $id = $_POST['clamId'];
        $cusNic = $_POST['cus_nic'];
        $vehicleNo = $_POST['vehicle_no'];
        $requestDate = $_POST['request_date'];
        $approvedDate = $_POST['approved_date'];
        updateClaim($id, $cusNic, $vehicleNo, $requestDate, $approvedDate);
    
    }
     // Delete logic
    
     if (isset($_POST['v-delete-submit'])) {
        $id = $_POST['clamId'];
        deleteClaim($id);
    }

    
    
    ?>

    <div class="container-fluid">
        <div class="row content">
            <?php include ("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
                <h1>Claim status</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Vehicle No</th>
                            <th>Request Date</th>
                            <th>Approved Date</th>
                            <th>Actions</th>
                            
                            
                        </tr>
                    </thead>
                     <tbody>
                        <?php if (viewClaimStatus()->num_rows > 0) {
                            foreach (viewClaimStatus()->fetch_all() as $clam) {
                                echo "<tr>";
                                echo "<td>" . $clam[0] . "</td>";
                                echo "<td>" . $clam[1] . "</td>";
                                echo "<td>" . $clam[2] . "</td>";
                                echo "<td>" . $clam[3] . "</td>";
                                echo "<td>" . $clam[4] . "</td>";
                                echo "<div style='flex-direction: row; display:flex; gap:10px;'>";
                                echo " <button onclick='getClamId(" . $clam[0] . ")' data-toggle='modal' data-target='#updateModal' class='btn btn-primary edit'>Edit</button>";
                                echo " <form method='post' enctype='multipart/form-data'>";
                                echo " <input type='hidden' name='clamId' id='clamId' value=" . $clam[0] . " >";
                                echo " <button type='submit' name='v-delete-submit' class='btn btn-danger'>Delete</button>";
                                echo " </form>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
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
                                        <label>Customer NIC</label>
                                        <input type="text" class="form-control" id="cus_nic" placeholder="Enter Customer NIC"
                                            name="cus_nic"  value="<?php echo $clamRow["cus_nic"];?>" required  >
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Vehicle NO.</label>
                                        <input type="text" class="form-control" id="vehicle_no" placeholder="Enter Vehicle No."
                                            name="vehicle_no" value="<?php echo $clamRow["vehicle_no"];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Request Date</label>
                                        <input type="date" class="form-control" id="request_date" placeholder="Enter request date"
                                            name="request_date" value="<?php echo $clamRow["request_date"];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Approved Date</label>
                                        <input type="date" class="form-control" id="approved_date" placeholder="Enter approved date"
                                            name="approved_date" value="<?php echo $clamRow["approved_date"];?>" required>
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
                        




    
</body>

</html>