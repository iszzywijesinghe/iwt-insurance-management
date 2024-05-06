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
                            <th>Rate</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (viewFeedback()->num_rows > 0) {
                            foreach (viewFeedback()->fetch_all() as $clam) {
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

                
            </div>
        </div>
    </div>

</body>

</html>