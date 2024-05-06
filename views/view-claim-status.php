<!DOCTYPE html>
<?php include ("../services/claim-status-service.php"); ?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/footer-new.css">
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
s
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
                <h1>Claim status</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Vehicle No</th>
                            <th>Request Date</th>
                            <th>Approved Date</th>
                            
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <?php while ($row = viewClams()) {
                            echo "<tr>";
                            echo "<td>" . $row["claim_status_id"] . "</td>";
                            echo "<td>" . $row["vehicle_no"] . "</td>";
                            echo "<td>" . $row["request_date"] . "</td>";
                            echo "<td>" . $row["approved_date"] . "</td>";
                            echo "</tr>";
                        } ?>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
    <?php include '../partials/footer-new.php' ?>
</body>

</html>