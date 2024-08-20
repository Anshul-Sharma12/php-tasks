<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Multiplication</title>
</head>
<body>
    <form method="post">
<pre>     
       5  6  8              0  1  1      
 ma = 10 12 13         mb = 1  2  1      
       1  4  5              1  3  4                        
    </pre>
    <input type="submit" name="submit"/>
    <pre id="result">result: </pre>
</form>
    <?php 
    if(isset($_POST["submit"])) {
        $a = Array( Array(5,6,8), Array(10,12,13), Array(1,4,5));

        $b = Array( Array(0,1,1), Array(1,2,1), Array(1,3,4));

        $res = array(
            array(0,0,0),
            array(0,0,0),
            array(0,0,0)
        );

        for($i=0;$i<3;$i++) {
            for($j=0;$j<3;$j++) {
                // $res[$i][$j] = 0;
                for($k=0;$k<3;$k++) {
                    $res[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        } 
        for($i=0;$i<3;$i++){
            for($j=0;$j<3;$j++){
                echo $res[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>