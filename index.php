<?php

include "../config/database.php";

$search = "";

if (isset($_GET["search"])) {
    $search = $_GET["search"];
}

$sql = "SELECT * FROM units
        WHERE unit_number LIKE '%$search%'
        OR unit_type LIKE '%$search%'
        OR status LIKE '%$search%'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Units</title>

    <style>

        body {
            font-family: Arial;
            background-color: #f2f2f2;
            margin: 0;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .container {
            width: 90%;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            box-shadow: 0 2px 5px gray;
        }

        .search-box {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .search-box input {
            padding: 10px;
            width: 300px;
            box-sizing: border-box;
        }

        .search-box button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .add {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 10px 15px;
        }

    </style>

</head>

<body>

<div class="header">

    <h1>Units</h1>

</div>

<div class="container">

    <a class="add" href="add.php">Add Unit</a>

    <a href="../dashboard.php">Back to Dashboard</a>

    <div class="search-box">

        <form method="GET">

            <input
                type="text"
                name="search"
                placeholder="Search unit..."
                value="<?php echo $search; ?>"
            >

            <button type="submit">Search</button>

            <a href="index.php">Clear</a>

        </form>

    </div>

    <table>

        <tr>
            <th>Unit ID</th>
            <th>Unit Number</th>
            <th>Unit Type</th>
            <th>Monthly Rent</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>

        <tr>

            <td><?php echo $row["unit_id"]; ?></td>

            <td><?php echo $row["unit_number"]; ?></td>

            <td><?php echo $row["unit_type"]; ?></td>

            <td>₱<?php echo $row["monthly_rent"]; ?></td>

            <td><?php echo $row["status"]; ?></td>

            <td>

                <a href="edit.php?id=<?php echo $row["unit_id"]; ?>">
                    Edit
                </a>

                <a href="delete.php?id=<?php echo $row["unit_id"]; ?>"
                   onclick="return confirm('Are you sure you want to delete this unit?');">
                    Delete
                </a>

            </td>

        </tr>

        <?php

            }

        } else {

        ?>

        <tr>
            <td colspan="6">No units found.</td>
        </tr>

        <?php

        }

        ?>

    </table>

</div>

</body>

</html>