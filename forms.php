<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        div {
            text-align: center;
        }

        #form {
            width: 50%;
            border: 2px solid black;
            padding: 40px;
            border-radius: 6px;
            margin-left: 21.5%;
        }

        #email,
        #name,
        #subject,
        #message,
        #submit {
            width: 80%;
            padding: 12px;
            margin: 0px 0px 15px 8px;
            border-radius: 7px;
        }

        #submit {
            width: 40%;
        }
    </style>

</head>

<body>

    <div>
        <h1>Form Submission</h1>
        <p><span class="error">* required field</span></p>
        <form id="form" action="data.php" method="post">
            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" placeholder=" Full Name" id="name" required>
                <span class="error"> * </span><br><br>
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" placeholder=" Email" id="email" required>
                <span class="error"> * </span><br><br>
            </p>
            <p>
                <label for="subject">Subject: </label>
                <input type="text" name="subject" placeholder=" Subject" id="subject"><br><br>
            </p>
            <p>
                <label for="message">Message: </label>
                <textarea name="message" placeholder=" Message" rows="5" id="message"></textarea>
            </p>
            <input id="submit" type="submit" value="Submit">
        </form>
    </div>

</body>

</html>