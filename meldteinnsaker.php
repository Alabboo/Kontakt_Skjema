<?php
$con = new mysqli('localhost', 'root', '', 'saker');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM `data` ORDER BY id DESC";
$result = $con->query($sql);

// Count the number of cases
$caseCount = $result->num_rows;

// Close the database connection
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meldte inn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #4caf50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4caf50;
            color: white;
        }
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 8px;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Submitted Cases - <?php echo $caseCount; ?> Cases to Solve</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Email</th><th>Name</th><th>Class</th><th>Comment</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['epost']}</td>";
            echo "<td>{$row['navnogetternavn']}</td>";
            echo "<td>{$row['klasse']}</td>";
            echo "<td>{$row['kommentar']}</td>";
            echo "<td><textarea id='comment_{$row['id']}'></textarea><br>";
            echo "<button onclick='saveComment({$row['id']})'>Save Comment</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No cases found</p>";
    }
    ?>

    <script>
        function saveComment(id) {
            var comment = document.getElementById('comment_' + id).value;

            // Send the comment data to the server (you need to implement this part using AJAX or form submission)
            // For simplicity, I'm just logging the comment to the console here
            console.log('Comment for Case ' + id + ': ' + comment);
        }
    </script>

</body>
</html>
