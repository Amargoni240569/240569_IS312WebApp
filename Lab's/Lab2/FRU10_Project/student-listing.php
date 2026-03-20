<?php
// Author: Abel Margoni
// Date:
// Unit: IS312 Web Application Development

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Listing</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            width: 80%;
            max-width: 900px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }

        .no-data {
            margin-top: 20px;
            color: red;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Student List</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Student No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Contact No</th>
                    <th>Program Code</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['StudentNo']}</td>
                    <td>{$row['Firstname']}</td>
                    <td>{$row['Lastname']}</td>
                    <td>{$row['Gender']}</td>
                    <td>{$row['ContactNo']}</td>
                    <td>{$row['ProgramCode']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='no-data'>No student records found.</p>";
    }

    $conn->close();
    ?>

    <a href="index.html" class="back-btn"> Back to Home</a>
</div>

</body>
</html>
