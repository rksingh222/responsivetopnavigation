<?php

//Username is root
$username = "root";
$password = "Rahul22-2-85";
$database = "blogger";
$servername = "127.0.0.1";

$mysqli = new mysqli($servername, $username, $password, $database);

if($mysqli->connect_error)
{
    die('Connect Error ('. $mysqli->errno . ')' . $mysqli->connect_error);
}

echo "test";
$sql = "SELECT * FROM blog";
$result = $mysqli->query($sql);
$mysqli->close();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="responsivecards.css">
</head>

<body>

    <div class="grid">
        <?php while($rows = $result->fetch_assoc()) { ?>
        <a href="<?php echo 'test1.php?val=' . $rows['Idno'] ; ?>">
            <div class="grid-item">
                <img class="card-img" src="bg.jpg" alt="">
                <div class="card-content">
                    <h1 class="card-header"><?php echo $rows['name']; ?></h1>
                    <p class="card-text">
                        <?php echo $rows['content']; ?>
                    </p>
                    <button class="card-btn">Visit<span>&rarr;</span></button>
                </div>
            </div>
        </a>
        <?php } ?>
    </div>
</body>

</html>