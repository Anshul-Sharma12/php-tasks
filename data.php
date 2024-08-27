<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
    <style>
        div {
            width: 50%;
            border: 2px solid black;
            padding: 40px;
            padding-top: 10px;
            border-radius: 6px;
            margin-left: 21.5%;
            text-align: center;
        }

        table, th, td {
    border: 1px solid black;
}
    </style>
</head>

<body>
    <div>
        
        <?php 
        
    $servername = "localhost";
    $username = "root";
    $password = "Fairlogs1";
    $dbname = "FormDetails";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die ("connection failed:");
    }

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["subject"])) {
        $subject = "NULL";
      } else {
        $subject = test_input($_POST["subject"]);
      }
      
      if (empty($_POST["message"])) {
        $message = "NULL";
      } else {
        $message = test_input($_POST["message"]);
      }
      
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    

    $sql = "INSERT INTO formdata(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message');";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Data is Successfully Stored in the Database FormDetails</h3>";
    echo ("Name: \n$name <br> Email:\n$email <br> Subject:\n$subject <br> Message:\n$message <br><br>");
    } else {
        echo "error in adding $sql. " . $conn->error;
    }

    $sql1 = "SELECT * FROM formdata;";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>S.no.</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] . "</td></tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }

    $conn->close();
    ?>
    </div>
</body>

</html>