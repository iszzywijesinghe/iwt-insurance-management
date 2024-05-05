<!DOCTYPE html>
<html lang="en">
<?php include ("../services/feedback-service.php"); ?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    include ("../services/feedback-service.php");

    if (isset($_POST[''])) {

        $rate = $_POST['rating'];
        $des = $_POST['fb-note'];
        // $fbId = $_POST[''];
        // $nic = $_POST[''];

        // addFeedback($fbId, $rate, $des, $nic);

        echo $rate;

        // TODO: Debug this logic
        // if (
        //     !empty($vehicleNo) ||
        //     !empty($vehiclePhotos) ||
        //     !empty($date) ||
        //     !empty($grade)
        // ) {
        //     addClams($vehicleNo, $vehiclePhotos, $date, $grade);
        // }
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
                                echo "</tr>";
                            }
                        } ?>
                    </tbody>
                </table>

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
            </div>
        </div>
    </div>

</body>

</html>