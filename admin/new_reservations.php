<?php

require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - New Reservations</title>
    <?php require('inc/links.php') ?>
</head>

<body class="bg-light">

    <?php include('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">New Reservations</h3>

                <!-- Features -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <input type="text" oninput="search_user(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type to Search....">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light ">
                                        <th scope="col">#</th>
                                        <th scope="col">User Details</th>
                                        <th scope="col">Facilities Details</th>
                                        <th scope="col">Reservations Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead> 
                                <tbody id="users-data" class="align-middle">
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script src="scripts/new_reservations.js"></script>

</body>

</html>