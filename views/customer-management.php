<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../asserts/js/customer-management.js"></script>
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
    <?php include("../services/register-service.php");
    // Delete logic
    
    if (isset($_POST['v-delete-submit'])) {
        $id = $_POST['clamId'];
        deleteClaim($id);
    }

    ?>
    <div class="container-fluid">
        <div class="row content">
            <?php include("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
                <button style="margin-bottom: 45px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    Add Clams</button>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>cusid</th>
                            <th>cusnic</th>
                            <th>First name</th>
                            <th>last name</th>
                            <th> email</th>
                            <th>house no</th>
                            <th>street no</th>
                            <th>city</th>
                            <th>gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (viewuser()->num_rows > 0) {
                            foreach (viewuser()->fetch_all() as $clam) {
                                echo "<tr>";
                                echo "<td>" . $clam[0] . "</td>";
                                echo "<td>" . $clam[1] . "</td>";
                                echo "<td>" . $clam[2] . "</td>";
                                echo "<td>" . $clam[3] . "</td>";
                                echo "<td>" . $clam[4] . "</td>";
                                echo "<td>" . $clam[5] . "</td>";
                                echo "<td>" . $clam[6] . "</td>";
                                echo "<td>" . $clam[7] . "</td>";
                                echo "<td>" . $clam[8] . "</td>";
                                echo "<td>";
                                echo "<div style='flex-direction: row; display:flex; gap:10px;'>";
                                echo " <button onclick='getCustomerid(" . $clam[0] . ")' data-toggle='modal' data-target='#updateModal' class='btn btn-primary edit'>Edit</button>";
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
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="clamId" id="clamId">
                                    <div class="form-group">
                                        <label>CustomerNic</label>
                                        <input type="text" class="form-control" id="CustomerNic" placeholder="Enter customer nic" name="cus_nic" value="<?php echo $clamRow["cus_nic"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- TODO: Should be a file uploader -->
                                        <label>FirstName</label>
                                        <input type="text" class="form-control" id="FirstName" placeholder="Enter first name" name="first_name" value="<?php echo $clamRow["first_name"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>LastName</label>
                                        <input type="text" class="form-control" id="LastName" placeholder="Enter last name" name="last_name" value="<?php echo $clamRow["last_name"]; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $clamRow["email"]; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Houseno</label>
                                        <input type="text" class="form-control" id="Houseno" placeholder="Enter house no" name="house_no" value="<?php echo $clamRow["house_no"]; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>streetno</label>
                                        <input type="text" class="form-control" id="streetno" placeholder="Enter street no" name="street_no" value="<?php echo $clamRow["street_no"]; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>city</label>
                                        <input type="text" class="form-control" id="city" placeholder="city" name="city" value="<?php echo $clamRow["city"]; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" class="form-control" id="gender" placeholder="gender" name="gender" value="<?php echo $clamRow["gender"]; ?>" required>
                                    </div>

                                    <button type="submit" name="c-edit-submit" class="btn btn-default">Add</button>
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




                            









    
                                