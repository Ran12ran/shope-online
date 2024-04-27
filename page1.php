<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shope online | اضافه كتاب</title>
    <link rel="stylesheet" href="index_page1.css">
</head>
<body>
<center>

        <div class="main">
            <form action="page2.php" method="post" enctype="multipart/form-data">
                <h2>موقع لبيع كتبتك</h2>
                <br>
                <div class="inputBox">
                <label>   :   ادخل اسم الكتاب</label> <input type="text" name='name' >  
                <br><br>
                </div>

                <div class="inputBox">
                <label>   :   ادخل سعر الكتاب</label> <input type="text" name='price' >  
                <br><br>
                </div>

                <div class="inputBox">
                <label> : ادخل تاريخ نشر الكتاب</label><input type="text" name='name2' >
                <br><br>
                </div>

                <div class="inputBox">
                <label> : ادخل معلومات التواصل</label><input type="text" name='number' placeholder="                      رقم جوال  |   ايميل" >
                </div>
                
                <div class="inputlabel">

                <input type="file" id="file" name='image' style='display:none'>
                
                <br>
                <label for="file"> <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
  انقر لإرفقاق صوره الكتاب</label>
                

                </div>
                <br><br>
                <button name="upload">اضف الكتاب</button>
                <br><br><br>
                <a href="page3.php">عرض جميع الكتب</a>

            </form>
        </div>
    
        <br><br><br>
        <p>Developer :Raneem fawaz</p>
</center>
</body>
</html>