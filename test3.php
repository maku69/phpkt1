<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style>
        .navbar {
            background-color: transparent;
            width: calc(100% + 300px);
            margin-left: -150px;
            margin-right: -150px;
        }

        .center-heading {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-2 mx-auto">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#" style="font-size: larger; font-weight: bold;">MarkusPilv.ee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="https://liivakast.hkhk.edu.ee/~mpilv/phpkt/test2.php">Avaleht</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://liivakast.hkhk.edu.ee/~mpilv/bs5/KT/Tooted.html" class="nav-link text-dark">Tehtud Tööd</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="https://liivakast.hkhk.edu.ee/~mpilv/bs5/KT/Teenused.html">Oskused</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="https://liivakast.hkhk.edu.ee/~mpilv/bs5/KT/Kontakt.html">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://liivakast.hkhk.edu.ee/~mpilv/phpkt/admin.php" class="btn btn-primary" class="nav-link active text-dark" aria-current="page" >Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5 mx-auto">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <?php
                // Kontrolli, kas fail on olemas ja avatud
                if (($file = fopen("sisu.txt", "r")) !== FALSE) {
                    // Loe failist rida ja kuvab see seni, kuni faile on rida lugeda
                    $i = 1;
                    while (($line = fgets($file)) !== FALSE) {
                        if ($i == 1) {
                            echo '<h2 class="bold">' . $line . '</h2><br>';
                        } else if ($i == 2) {
                            echo '<p class="lead">' . $line . '</p><br>';
                        } else {
                            echo '<p class="small lead">' . $line . '</p><br>';
                        }
                        $i++;
                    }
                    // Sulge fail
                    fclose($file);
                } else {
                    echo "Faili avamine ebaõnnestus.";
                }
                ?>
            </div>
           <div class="col-md-6 order-md-2 text-left">
    <?php
    // Loe piltide teed kataloogist "uploads1" ja kuva pildid
    $dir = 'uploads1/';
    $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    if (count($images) >= 1) {
        echo '<img src="' . $images[0] . '" class="img-fluid" alt="Uploaded Image 1">';
      
    } else {
        echo '<img src="https://www.metshein.com/kordamine/bs1%20man.jpg" class="img-fluid" alt="Placeholder Image">';
    }
    ?>
</div>
            </div>
            <div class="col-md-6 order-md-3 text-left">
                <button type="button" class="btn btn-primary btn-lg d-block mt-4">
                    Palka mind
                    <i class="far fa-paper-plane ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-5 mx-auto">
        <h1 class="center-heading bold" style="font-size: 45px;">Minust</h1>
        <h3 class="center-heading lead">Mu parimad saavutused</h3>
    </div>

    <div class="container mt-5 mx-auto">
        <div class="row">
            <div class="col-md-6">
                <?php
                    // Vaheta esimene rida
                    fgets($file);
                    if (count($images) >= 1) {
                        echo '<img src="' . $images[1] . '" class="img-fluid" alt="Uploaded Image 1">';
                      
                    } else {
                        echo '<img src="https://www.metshein.com/kordamine/bs1%20man.jpg" class="img-fluid" alt="Placeholder Image">';
                    }
                ?>
            </div>

                     <div class="col-md-6">
                <?php
                // Kontrolli, kas fail on olemas ja avatud
                if (($file = fopen("sisu2.txt", "r")) !== FALSE) {
                    // Loe failist rida ja kuvab see seni, kuni faile on rida lugeda
                    $i = 1;
                    while (($line = fgets($file)) !== FALSE) {
                        if ($i == 1) {
                            echo '<h2 class="lead">' . $line . '</h2><br>';
                        }
                        $i++;
                    }
                    // Sulge fail
                    fclose($file);
                } else {
                    echo "Faili avamine ebaõnnestus.";
                }
                ?>
                <div class="row center-heading">
                    <div class="col-md-4">
                        <div>
                            <h5 class="bold">+1</h5>
                            <h6>Aastat kogemust</h6>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div>
                            <h5 class="bold">2+</h5>
                            <h6>Projekti lõpetatud</h6>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div>
                            <h5 class="bold">0</h6>
                            <h6>Ettevõttes töötatud</h5>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg d-block mt-4">
                    Lae alla CV
                    <i class="fas fa-download"></i>
                </button>
            </div>
        </div>
    </div>

</body>

</html>
