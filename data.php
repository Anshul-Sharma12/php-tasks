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
    

    $sql = "INSERT INTO formdata VALUES ('$name', '$email', '$subject', '$message');";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Data is Successfully Stored in the Database FormDetails</h3>";
    echo ("Name: \n$name <br> Email:\n$email <br> Subject:\n$subject <br> Message:\n$message");
    } else {
        echo "error in adding $sql. " . $conn->error;
    }

    $conn->close();
    ?>
    </div>
</body>

</html>