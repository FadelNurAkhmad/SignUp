<?php
//  include 'function.php';
 require 'function.php';
 include 'db.php';

?>


<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .warning {color: #FF0000;}
    </style>
    <title>Form Register</title>
</head>
<body>  

<div class="container">
  <div class="row ">
    <div class="col">
      <div class="card">
        <div class="card-header">
            Form Sign Up User Baru
        </div>
          <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>">
                  <span class="warning"><?php echo $error_nama; ?></span>
                </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control <?php echo($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>">
                  <span class="warning"><?php echo $error_email; ?></span>
                </div>
            </div>

            <div class="form-group row">
              <label for="telp" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" name="password" class="form-control <?php echo($error_password !="" ? "is-invalid" : ""); ?>" id="password" placeholder="password" value="<?php echo $password; ?>">
                  <span class="warning"><?php echo $error_password; ?></span>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                    <button type="submit" name="sigin" class="btn btn-primary" > Sign Up</button>
                    <!-- <input type="submit" name="sigin" class="btn btn-info" value="Sig In"> -->
                  <?php
                    if(isset($_POST['sigin'])){
                        echo '<script>window.location="welcome.php"</script>';         
                    }
                  ?>
              </div>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>