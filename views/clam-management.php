<!DOCTYPE html>
<html lang="en">
<?php include ("../services/clam-management-service.php"); ?>

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


    <?php include ("../partials/user-dashboard-navbar-sm.php"); ?>

    <div class="container-fluid">
        <div class="row content">
            <?php include ("../partials/user-dashboard-navbar-md.php"); ?>
            <br>
            <div class="col-sm-9">
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
                    <!-- <tbody>
                        <?php while ($row = viewClams()) {
                            echo "<tr>";
                            echo "<td>" . $row["claim_id"] . "</td>";
                            echo "<td>" . $row["vehicle_no"] . "</td>";
                            echo "<td>" . $row["vehicle_photos"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo "<td>" . $row["accident_grade"] . "</td>";
                            echo "</tr>";
                        } ?>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>

</body>

</html>