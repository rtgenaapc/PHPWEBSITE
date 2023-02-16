<!DOCTYPE html>
<html>
<head>
    <title>Reiner Gena</title>
        <!-- Favicon ni RJ-->
        <link rel="icon" type="image/png" href="images/RJ-favicon.png">
        <link rel="stylesheet" href="mystyle.css">
        <script src="myScript.js"></script>
        <meta charset="UTF-8">

        <meta name="description" content="Reiner Gena's Portfolio">
        <meta name="keywords" content="Reiner, Gena, RJ, HTML, CSS, JavaScript">
        <meta name="author" content="Reiner Gena">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="header">
        <div class="logo">
        <img src="images/RJ-LOGO.png" alt="logo">
        </div>
        <h1>RJ.</h1>
        <div class="header-right">
          <a class="active" href="index.php"><b>Home</b></a>
        </div>
    </div>
    <div class="content">
        <div class="flex-container">
        <?php
            $servername = "192.168.150.213";
            $username = "webprogmi211";
            $password = "j@zzyAngle30";
            $dbname = "webprogmi211";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT id, Fullname, email, website, comment FROM Gena_MyGuests";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             // output data of each row
              while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["Fullname"]. "  - Email: " . $row["email"]. "  - Website: " . $row["website"]. "  - Comment: " . $row["comment"]."<br>";
              }
            } else {
              echo "0 results";
            }


            $conn->close();
            ?>
        </div>
    </div>