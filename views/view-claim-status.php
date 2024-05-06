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
            </div>
        </div>
    </div>
    <?php include '../partials/footer-new.php' ?>
</body>

</html>