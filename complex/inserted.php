
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Analyzer</title>
</head>
<body>
<?php

$conn = mysqli_connect('localhost','root','','users');

if(!$conn){
    echo 'Not connected';
}

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $mobilenumber = $_POST['mobilenumber'];
    $userpassword = $_POST['userpassword'];

    $sql = "INSERT INTO users (firstname,middlename,lastname,emailid,mobilenumber,userpassword)
    VALUES ('$firstname','$middlename','$lastname','$emailid','$mobilenumber','$userpassword')";

if(!mysqli_query($conn,$sql)){
    echo "Not inserted";
} 
else{
    echo "<h1>";
    echo 'You will be redirected to main page.';
    echo "</h1>";
}

header("refresh:2; url=index.php");
}


?>
</body>
</html>

