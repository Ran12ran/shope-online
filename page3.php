<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> all products | جميع المنتجات  </title>
    <link rel="stylesheet" href="index_page3.css">

</head>
<body>
    <center>
      <h3>جميع الكتب المتوفرة</h3>  
    </center>
    
    <?php
    include('config.php');
    $result= mysqli_query($con, "SELECT * FROM prophp");
    while($row = mysqli_fetch_array($result)){
        echo "
        <main>
          <div class='card'  style='width: 15rem';>
          <img src='$row[image]' class='card-img'>

          <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price] : سعر الكتاب </p>
            <p class='card-text'>$row[name2] : تاريخ نشر الكتاب </p>
            <p class='card-text'>$row[number] : رقم-ايميل التواصل  </p>

           <button name='upload' class='button'>delete</button>
           <button name='upload' class='button'>edit</button>

           
          </div>
          </div>
        </main>
        ";
    }

    
    ?>
 

</body>
</html>