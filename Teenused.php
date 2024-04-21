<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/9120ee6edc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
        .banner1 {
            height: 300px;
            object-fit: cover;
            background-position: center;
        }
        .banner2 {
            height: 300px;
            object-fit: cover;
            background-position: center;
        }
        .product-image {
            max-width: 80px;
            max-height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gregori</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#minuMenyy" aria-controls="minuMenyy" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
        <div class="navbar-collapse collapse w-0 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="KT2.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pod.php" tabindex="1" aria-hidden="true">Tooted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Teenused.php" tabindex="1" aria-hidden="true">Teenused</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kontakt.php" tabindex="1" aria-hidden="true">Kontakt</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-success bg-primary" type="submit">Adminn</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div> 
    <style>
        .product-image {
            max-width: 80px;
            max-height: 100%;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-4">Admin</h1>
        </div>
        <div class="col-md-6">
            <div class="container">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Pilt</th>
                            <th scope="col">Nimi</th>
                            <th scope="col">Hind</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Funktsioon toote lisamiseks CSV faili
                        function addProductToCSV($productName, $productPrice, $productImage) {
                            $fail = "tooted.csv";
                            $newProductData = "$productImage, $productName, $productPrice\n";
                            file_put_contents($fail, $newProductData, FILE_APPEND);
                            move_uploaded_file($_FILES['productImage']['tmp_name'], 'img/' . $productImage);
                        }

                        // Funktsioon toote eemaldamiseks CSV failist
                        function removeProductFromCSV($productNameToRemove) {
                            $fail = "tooted.csv";
                            $lines = file($fail);
                            $output = [];
                            foreach ($lines as $line) {
                                $data = str_getcsv($line);
                                if ($data[1] != $productNameToRemove) {
                                    $output[] = $line;
                                }
                            }
                            file_put_contents($fail, implode($output));
                        }

                        // Lisame uue toote, kui vormi saadetakse
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uploadfile'])) {
                            $productName = $_POST['productName'];
                            $productPrice = $_POST['productPrice'];
                            $productImage = $_FILES['productImage']['name'];
                            addProductToCSV($productName, $productPrice, $productImage);
                        }

                        // Eemaldame toote, kui nuppu "Kustuta" vajutatakse
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['RproductName'])) {
                            $productNameToRemove = $_POST['RproductName'];
                            removeProductFromCSV($productNameToRemove);
                        }

                        // Olemasolevate toodete kuvamine
                        $fail = "tooted.csv";
                        if (file_exists($fail)) {
                            $file = fopen($fail, "r");
                            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
                                $productImage = trim($data[0]);
                                $productName = trim($data[1]);
                                $productPrice = trim($data[2]);
                                ?>
                                <tr>
                                    <td>
                                        <img class="rounded-circle product-image" src="img/<?php echo $productImage; ?>" alt="">
                                    </td>
                                    <td><?php echo $productName; ?></td>
                                    <td><?php echo $productPrice . "€"; ?></td>
                                    <td>
                                        <!-- Siia saate lisada nupu funktsionaalsuse toote kustutamiseks või muutmiseks -->
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            <input type="hidden" name="RproductName" value="<?php echo $productName; ?>">
                                            <input type="hidden" name="RproductPrice" value="<?php echo $productPrice; ?>">
                                            <input type="hidden" name="RproductImage" value="<?php echo $productImage; ?>">
                                            <button type="submit" class="btn">Kustuta</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                            fclose($file);
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Toote nimi</label>
            <input type="text" class="form-control" id="productName" name="productName">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Hind</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice">
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Pilt</label>
            <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary" name="uploadfile">UPLOAD</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
