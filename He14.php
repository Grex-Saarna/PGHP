<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gregori Saarna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <style>
        #wrapper {
            width: 50%;
            margin: 20px auto;
            border: 2px solid #dad7d7;
        }
        form {
            width: 50%;
            margin: 20px auto;
        }
        form div {
            margin-top: 5px;
        }
        img {
            float: left;
            margin: 5px;
            width: 280px;
            height: 120px;
        }
        #img_div {
            width: 70%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #dad7d7;
        }
        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <form method="POST" action="" enctype="multipart/form-data">        
            <input type="file" name="choosefile" value="" accept="image/*">
            <div>
                <button type="submit" name="uploadfile">UPLOAD</button>
            </div>
        </form>
        <?php
        if(isset($_POST['uploadfile'])) {
            $file_name = $_FILES['choosefile']['name'];
            $file_type = $_FILES['choosefile']['type'];
            $file_size = $_FILES['choosefile']['size'];
            $file_tem_loc = $_FILES['choosefile']['tmp_name'];
            $file_store = "uploads/".$file_name;
            move_uploaded_file($file_tem_loc, $file_store);
            echo "<div id='img_div'>";
            echo "<img src='$file_store' />";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
