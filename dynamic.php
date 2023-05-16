<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1,p{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 30px;
            color: aliceblue;
        }
        div{
            border: 1px solid;
            width: 60%;
            background-color: rgba(245, 241, 241, 0.4);
            border-radius: 15px;
        }
    </style>
</head>

<body background="./src/a.jpg">
    <br><br>
    <center>

        <h1 style="font-size: 50PX;">
        <?php
            $n = $_GET['t1'];
            echo "Thank you for your registration $n!";
        ?>  
        </h1>

        <br>
        
        <div>
            <p>
            <?php
            $e = $_GET['t2'];
            $p = $_GET['pn'];
            $c = $_GET['course'];
            echo "We can provide updates you about $c on $e or $p for our future notices and actions.";
            ?>
            </p>
        </div>

    </center>
</body>
</html>