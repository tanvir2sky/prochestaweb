<?php
session_start();
include_once '/includes/DBconnect.php';
$name =  mysqli_real_escape_string($conn,$_POST['name']);
$date = DateTime::createFromFormat('d/m/Y', mysqli_real_escape_string($conn,$_POST['birthday']) );
$birthday = $date->format('Y-m-d');
$sex =  mysqli_real_escape_string($conn,$_POST['sex']);
$bloodgroup =  mysqli_real_escape_string($conn,$_POST['bloodgroup']);
$presentAddress =  mysqli_real_escape_string($conn,$_POST['presentAddress']);
$parmanentAddress =  mysqli_real_escape_string($conn,$_POST['parmanentAddress']);
$nationalId =  mysqli_real_escape_string($conn,$_POST['nationalId']);
$phone =  mysqli_real_escape_string($conn,$_POST['phone']);
$mail =  mysqli_real_escape_string($conn,$_POST['mail']);
$facebook =  mysqli_real_escape_string($conn,$_POST['facebook']);
$occupation =  mysqli_real_escape_string($conn,$_POST['occupation']);
$organization =  mysqli_real_escape_string($conn,$_POST['organization']);
$why =  mysqli_real_escape_string($conn,$_POST['why']);
$which =  mysqli_real_escape_string($conn,$_POST['which']);
$fileToUpload =  mysqli_real_escape_string($conn,$_FILES["fileToUpload"]["name"]);


if($name== '' or $birthday== '' or $sex== '' or $bloodgroup== '' or $presentAddress== '' or $parmanentAddress== '' or $nationalId== '' or $phone== '' or $mail== '' or $facebook== '' or $occupation== '' or $organization== '' or $why== '' or $which== '' or $fileToUpload== ''){
    
    $_SESSION["fail"] = "1";
    header("Location: volunteer.php");
die();
    
}


$sql = "INSERT INTO volunteer (name, birthday, sex,bloodgroup,presentAddress,parmanentAddress,nationalId,phone,mail,facebook,occupation,organization,why,which,pic)
VALUES ('$name','$birthday','$sex','$bloodgroup','$presentAddress','$parmanentAddress','$nationalId','$phone','$mail','$facebook','$occupation','$organization','$why','$which','$fileToUpload')";



$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    die();

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        die();
    }
}

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}




$_SESSION["success"] = "1";
$conn->close();
header("Location: volunteer.php");
die();














?>