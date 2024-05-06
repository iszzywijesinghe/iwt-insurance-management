<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../asserts/js/feedback-management.js"></script>
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
    include("../services/feedback-services.php");
    include ("../utils/url-helper.php");

    if (isset($_POST['fb-submit'])) {

        $rate = $_POST['rating'];
        $des = $_POST['fb_note'];
    // $nic = $_POST['']; TODO: get the element 

        addFeedback($rate, $des);



        // TODO: Debug this logic
        // if (
        //     !empty($vehicleNo) ||
        //     !empty($vehiclePhotos) ||
        //     !empty($date) ||
        //     !empty($grade)
        // ) {
        //     addClams($vehicleNo, $vehiclePhotos, $date, $grade);
        // }


        // update logic 
        $fbId = deconsturctURLFragment($_SERVER["QUERY_STRING"]);
        $feedbackRow = getUpdateRow($fbId)->fetch_array(MYSQLI_ASSOC);
    }


    ?>

    <div class="container-fluid">
        <div class="row content">
            <?php include("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
                <button style="margin-bottom: 45px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    Add Feedbacks</button>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Feedback Id</th>
                            <th>Rate</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (viewFeedback()->num_rows > 0) {
                            foreach (viewFeedback()->fetch_all() as $fb) {
                                echo "<tr>";
                                echo "<td>" . $fb[0] . "</td>";
                                echo "<td>" . $fb[1] . "</td>";
                                echo "<td>" . $fb[2] . "</td>";
                                echo "<td>";
                                echo "<div>";
                                // echo " <form method='post' enctype='multipart/form-data'>";
                                echo " <button onclick='getFeedbackId(" . $fb[0] . ")' data-toggle='modal' data-target='#updateModal' class='btn btn-primary edit'>Edit</button>";
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
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Feedback Id</label>
                                        <input type="text" class="form-control" id="fb-id" placeholder="Enter Feedback Id" name="fb-id" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" class="form-control" id="rating" placeholder="Enter Rating" name="rating" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" id="f-des" placeholder="Enter Description" name="f-des" required>
                                    </div>
                                    <button type="submit" name="fb-submit" class="btn btn-default">Add</button>
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
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="feedback-id" id="feedback-id">
                                    <div class="form-group">
                                        <label>Feedback Id</label>
                                        <input type="text" class="form-control" id="fb_id" placeholder="Enter Feedback Id" name="fb-id" value="<?php echo $feedbackRow["feedback_id"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="number" class="form-control" id="rating" placeholder="Enter Rating" name="rating" value="<?php echo $feedbackRow["rate"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" id="f-des" placeholder="Enter Description" name="f-des" value="<?php echo $feedbackRow["description"]; ?>" required>
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
        </div>
    </div>

</body>

</html>