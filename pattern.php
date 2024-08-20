<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pattern</title>
</head>
<body>
    <form method="post">
<input type="number" name="numberinp" id="numinput" min="1"/>
<input type="submit" name="submit"/>
</form>
    <?php 
    if(isset($_POST["submit"])) {
        $num = $_POST['numberinp'];
for($i=0;$i<=$num;$i++){  
    for($j=1;$j<=$i;$j++){  
    echo " $j";  
    }  
    echo "<br>";  
    }

    for($i=$num-1;$i>=1;$i--){  
        for($j=1;$j<=$i;$j++){  
            echo " $j";  
            }  
            echo "<br>";  
            
    }
}
    ?>
</body>
</html>