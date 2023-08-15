<?php
require_once '../database/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat_name = $_POST['cat_name'];
    $cat_featured = $_POST['cat_featured'];
    $cat_status = $_POST['cat_status'];
    $img_name = $_FILES['cat_img']['name'];
    $img_tmp = $_FILES['cat_img']['tmp_name'];
    $temp = explode(".", $_FILES["cat_img"]["name"]);
    $new_img_name = $temp[0]. rand(0,1000).'.' .$temp[1];


    $folder = "../images/". $new_img_name;
    $sql = "INSERT INTO `category`(`name`,`img_name`,`featured`,`status`) VALUES ('$cat_name','$new_img_name','$cat_featured','$cat_status')";
    $result = mysqli_query($conn,$sql);

    $file_upload = move_uploaded_file($img_tmp,$folder);

    if($result && $file_upload){
        echo "data successfully inserted";
    }
    else{
        echo "something went wrong";
    }





}

?>