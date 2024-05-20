<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <h1 class="mb-4">Muuda sisu ja laadi üles pilte</h1>

    <?php
    // Kontrollib, kas vorm on esitatud
    if (isset($_POST['sisu']) && isset($_POST['sisu2'])) {
        // Avab sisu.txt faili kirjutamiseks
        $file = fopen("sisu.txt", "w");
        // Kirjutab sisu.txt faili sisu
        fwrite($file, $_POST['sisu']);
        // Sulgeb faili
        fclose($file);
        
        // Avab sisu2.txt faili kirjutamiseks
        $file2 = fopen("sisu2.txt", "w");
        // Kirjutab sisu2.txt faili sisu
        fwrite($file2, $_POST['sisu2']);
        // Sulgeb faili
        fclose($file2);

        echo '<div class="alert alert-success" role="alert">Mõlemad sisud on edukalt salvestatud!</div>';
    }

    // Loeb sisu.txt faili sisu
    $content1 = file_get_contents("sisu.txt");
    // Loeb sisu2.txt faili sisu
    $content2 = file_get_contents("sisu2.txt");

// Pildi üleslaadimine
if (isset($_FILES['pilt1']) && isset($_FILES['pilt2'])) {
    $uploadDir = 'uploads1/';

    // Kustuta eelnevad pildid
    array_map('unlink', glob($uploadDir . '*'));

    $uploadFile1 = $uploadDir . basename($_FILES['pilt1']['name']);
    $uploadFile2 = $uploadDir . basename($_FILES['pilt2']['name']);
    $uploadOk = 1;

    // Salvestab pildifailide teed
    $uploadFile1 = $uploadDir . uniqid() . '_' . basename($_FILES['pilt1']['name']);
    $uploadFile2 = $uploadDir . uniqid() . '_' . basename($_FILES['pilt2']['name']);

    if (move_uploaded_file($_FILES['pilt1']['tmp_name'], $uploadFile1) &&
        move_uploaded_file($_FILES['pilt2']['tmp_name'], $uploadFile2)) {
        echo '<div class="alert alert-success" role="alert">Pildid on üles laaditud.</div>';
        // Salvestab pildifailide teed
        file_put_contents('piltide_teed.txt', $uploadFile1 . PHP_EOL . $uploadFile2);
    } else {
        echo '<div class="alert alert-danger" role="alert">Piltide üleslaadimine ebaõnnestus.</div>';
    }
}
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="sisu">Sisu 1:</label>
            <textarea class="form-control" id="sisu" name="sisu" rows="10"><?php echo $content1; ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="sisu2">Sisu 2:</label>
            <textarea class="form-control" id="sisu2" name="sisu2" rows="10"><?php echo $content2; ?></textarea>
        </div>

        <div class="form-group">
            <label for="pilt1">Vali esimene pilt:</label>
            <input type="file" class="form-control" id="pilt1" name="pilt1">
        </div>
        
        <div class="form-group">
            <label for="pilt2">Vali teine pilt:</label>
            <input type="file" class="form-control" id="pilt2" name="pilt2">
        </div>
  
        <button type="submit" class="btn btn-primary">Salvesta mõlemad</button>
        <a href="https://liivakast.hkhk.edu.ee/~mpilv/phpkt/test3.php" class="btn btn-secondary">Tagasi</a>
    </form>
</body>

</html>
