<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register New Vehicle</title>
        <link rel="stylesheet" href="../asserts/css/Regstylesheet.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/footer-new.css">

        <script src="../asserts/js/vehicle-management.js"></script>

</head>

<body>
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
                </body>

                </html>