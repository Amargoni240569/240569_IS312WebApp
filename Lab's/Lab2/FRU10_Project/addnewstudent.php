<?php
// Author: Abel Margoni
// Date:
// Unit: IS312 Web Application Development

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$studentNo = $_POST['studentNo'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$program = $_POST['program'];

// Insert query
$sql = "INSERT INTO Student 
(StudentNo, Firstname, Lastname, Gender, ContactNo, ProgramCode)
VALUES 
('$studentNo', '$firstname', '$lastname', '$gender', '$contact', '$program')";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Result</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>

</head>
<body>

<div class="box">

<?php
if ($conn->query($sql) === TRUE) {
    echo "<p class='success'>✅ Student added successfully!</p>";
} else {
    echo "<p class='error'>❌ Error: " . $conn->error . "</p>";
}

$conn->close();
?>

<a href="index.html">⬅ Back to Home</a>

</div>

</body>
</html>
