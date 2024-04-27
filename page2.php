<?php

include('config.php');


if(isset($_POST['upload'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $NAME2=$_POST['name2'];
    $NUMBER=$_POST['number'];
    $IMAGE=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;

    $insert ="INSERT INTO prophp (name , price , name2 , number , image) VALUES('$NAME',' $PRICE',' $NAME2','$NUMBER','$IMAGE')";
    mysqli_query($con,$insert);

    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo"<script>alert ('تم اضافة الكتاب بنجاح')</script>";
    }
    else{
        echo"<script>alert ('نعتذر لم يتم اضافة الكتاب ')</script>";

    }
}
header('location: page1.php');

?>