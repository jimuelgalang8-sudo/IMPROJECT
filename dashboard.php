<?php

include "config/database.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Apartment Management System</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .container {
            padding: 30px;
        }

        .menu {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            width: 200px;
            padding: 25px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 5px gray;
        }

        .card a {
            text-decoration: none;
            color: #333;
        }

        .card h2 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Apartment Management System</h1>
        <p>Tenant and Billing Management</p>
    </div>

    <div class="container">

        <h2>Dashboard</h2>

        <div class="menu">

            <div class="card">
                <h2>Tenants</h2>
                <p>Manage apartment tenants.</p>
                <a href="tenants/index.php">Open</a>
            </div>

            <div class="card">
                <h2>Units</h2>
                <p>Manage apartment units.</p>
                <a href="units/index.php">Open</a>
            </div>

            <div class="card">
                <h2>Leases</h2>
                <p>Manage tenant leases.</p>
                <a href="leases/index.php">Open</a>
            </div>

            <div class="card">
                <h2>Payments</h2>
                <p>Manage rent payments.</p>
                <a href="payments/index.php">Open</a>
            </div>

            <div class="card">
                <h2>Utility Bills</h2>
                <p>Manage electricity and water bills.</p>
                <a href="utilities/index.php">Open</a>
            </div>


            <div class="card">
    <h2>Payment Details</h2>
    <p>Manage payments connected to utility bills.</p>
    <a href="payment_details/index.php">Open</a>
</div>
        </div>

    </div>

</body>
</html>