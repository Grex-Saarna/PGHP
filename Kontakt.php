<!DOCTYPE html>
<html lang="et">
<head>
    <title>Title</title>
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
    <?php
    $rndmImages = ["img/b17.jpg", "img/b10.jpg", "img/b4.jpg", "img/b7.jpg", "img/b18.jpg"];
    $rndmTexts = ["<p class=\"card-text text-light mb-0\"><b>parim pakkumine</b></p>
    <h2 class=\"card-text text-light mb-0\">osta 1 saad 1</h2>
    <p class=\"card-text text-light mb-0\">The best classic dress is on sale at cora</p>", "<p class=\"card-text text-light mb-0\"><b>kevad/suvi</b></p>
    <h2 class=\"card-text text-light mb-0\">kõik rohelised</h2>
    <p class=\"card-text text-light mb-0\">20% sootsamalt</p>", "<p class=\"card-text text-light mb-0\"><b>sügis/talv</b></p>
    <h2 class=\"card-text text-light mb-0\">joped meestele ja naistele</h2>
    <p class=\"card-text text-light mb-0\">30% sootsamalt</p>", "<p class=\"card-text text-light mb-0\"><b></b></p>
    <h2 class=\"card-text text-light mb-0\">ägedad kõrvakad</h2>
    <p class=\"card-text text-light mb-0\">20% Sootsamalt</p>", "<p class=\"card-text text-light mb-0\"><b>osta 2 saad 10</b></p>
    <h2 class=\"card-text text-light mb-0\">kott</h2>
    <p class=\"card-text text-light mb-0\">Neid on erinevaid värve</p>"];
    $rndmImage = $rndmImages[array_rand($rndmImages)];
    $rndmImage2 = $rndmImages[array_rand($rndmImages)];
    $rndmText = $rndmTexts[array_rand($rndmTexts)];
    $rndmText2 = $rndmTexts[array_rand($rndmTexts)];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-1 banner1" style="background-image: url('<?php echo $rndmImage; ?>');">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <?php echo $rndmText; ?>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Vaata lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-1 banner2" style="background-image: url('<?php echo $rndmImage2; ?>');">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <?php echo $rndmText2; ?>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Tutvu lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container">
<div class="text-center">
  <h1>Minu Kontakt</h1>
  <div class="nav">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card border-0">
        <div class="card-body">
          <i class="fa-solid fa-leaf fa-4x" style="color: #005eff;"></i>
          <h6 class="card-title">Tel</h6>
          <p class="card-text">+ 44 5850 8363</p>
          </nav>
        </div>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Loe edasi</a>
        </li>
      </div>
    </div>
    <div class="col">
      <div class="card border-0">
        <i class="fa-brands fa-pagelines fa-4x" style="color: #ff0000;"></i>
        <div class="card-body">
          <h5 class="card-title">Aadress</h5>
          <p class="card-text">Pihlaka 5</p>
        </div>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Loe edasi</a>
        </li>
      </div>
    </div>
    <div class="col">
      <div class="card border-0">
        <i class="fa-brands fa-envira fa-4x" style="color: #FFD43B;"></i>
        <div class="card-body">
          <h5 class="card-title">Lorem sipsum</h5>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum adipisci nam itaque ipsa mollitia ipsam assumenda molestias voluptates, nobis dignissimos magni distinctio a sapiente nihil similique voluptas quia. Temporibus, repellat?</p>
        </div>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Loe edasi</a>
        </li>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>