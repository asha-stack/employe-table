<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Database</title>

    <!-- styling -->
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: #023047;
        font-family: Monospace; 
        font-size: 25px; 
        text-align: left;
    }
    th{
        background-color: #264653;
        color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    }
    h1{
        color: #588157;
    }
     </style>
</head>
<body>
<table>

    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
<th>Employement Type</th>

    <?php 

    $dbServename = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "people";

    //create connection
    $conn = mysqli_connect($dbServename, $dbUsername, $dbPassword, $dbName); 
    
    if (mysqli_connect_errno()) {
        echo "<h1>Failed to connect!</h1>";
        exit();
    }
    echo "<h1>Connection successful!</h1>" ; 

    $req = "SELECT * FROM `mytable`";
    $result = mysqli_query($conn, $req); 
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row["id"]. " </td> <td> " . $row["firstname"]. " </td> <td>" . $row["lastname"]. " </td> <td>" . $row["employeement type"]. "</tr>";
        }
    }else {
        echo "0 results"; 
    }

    $conn -> close();
    ?>
    </table>
</body>
</html>