<?php

include 'db.php';

$user = mysqli_query($conn, "SELECT * FROM user ORDER BY  id DESC LIMIT 1 ");
$u = mysqli_fetch_object($user);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Selamat Datang</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Selamat Datang</h1>
        <h5><?php echo $u->nama; ?></h5> 
    </div>
</body>
</html>


