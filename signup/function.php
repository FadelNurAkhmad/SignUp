<?php 
include 'db.php';

$error_nama = "";
$error_email = "";
$error_password = "";

$nama = "";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nama"])) 
    {
        $error_nama = "Nama tidak boleh kosong";
    } 
        else 
        {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
            {
            $error_nama = "Inputan Hanya boleh huruf dan spasi"; 
            }
        }
    
    if (empty($_POST["email"])) 
    {
        $error_email = "Email tidak boleh kosong";
    } 
        else 
        {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
            $error_email = "Format email Invalid"; 
            }
        }


    if (empty($_POST["password"])) 
    {
        $error_password = "Password tidak boleh kosong";
    } 
        else 
        {
            $password = cek_input($_POST["password"]);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);

            if(!$uppercase || !$lowercase || !$number || strlen($password)<=6){
            $error_password = "password harus lebih dari 6 karakter, mengandung huruf BESAR, huruf kecil dan angka";
            }
        }
    

}

    function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

  }

  mysqli_query($conn, "INSERT INTO user VALUES('', '$nama','$email', '$password') ");

  return mysqli_affected_rows($conn);

?>
